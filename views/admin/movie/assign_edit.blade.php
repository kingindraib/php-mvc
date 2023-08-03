@extends('admin.master')
@section('title','movie management')
@section('page_title','Assign threator Edit')
@section('body')
@php
use App\Components\Form;
@endphp

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            {{-- <h1 class="text-center my-2"></h1> --}}
			@include('message.message')
			<form action="{{url('admin/dashboard/movie/assign/update/'.$movie_id)}}" method="POST">
                <input type="hidden" name="movie_id" id="" value="{{$movie_id}}">
				<div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Select Screen</label>
                            <select name="screen_code" id="screen_id" class="form-control">
                                <option value="{{ screen_name($data->screen_id)->screen_code }}">{{ screen_name($data->screen_id)->screen_name }}</option>
                                
                                @foreach($moviescreen as $screen)
                                <?php $screen = obj($screen); ?>
                                <option value="{{ $screen->screen_code }}">{{ $screen->screen_name}}</option>,
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Show</label>
                            <select name="shows_id[]" id="movie_show" class="select2 form-control" multiple="multiple" required>
                                {{-- <option value="">select one</option> --}}
 
                            </select>
                        </div>
                       </div>
					{{unset_session('old')}}
				   {{unset_session('errors')}}
				   <div class="col-md-12">
					<button class="btn btn-danger" name="status" value="draft" type="submit">create +</button>
					{{-- <button class="btn btn-success" name="status" value="publish">Publish</button> --}}
				   </div>
				</div>
			</form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
	$(document).ready(function() {
    $('.select2').select2();
	$('.select2').select2({
	placeholder: 'Select an option'
	});
});
</script>
<script>
    $(document).ready(function(){
        $('#screen_id').on('change',function(){
            var id = $(this).val();
            // alert(id);
            $.ajax({
                url: "{{url('admin/dashboard/movie/assign/get_show/')}}"+id,
                type: "GET",
                success: function(show){
                    // console.log(show);
                    var showJson = JSON.parse(show);
                    $.each(showJson, function(index,value){
                        console.log(value.id);
                        $('#movie_show').empty();
                        $('#movie_show').append('<option value="'+value.id+'">'+value.show_name+'</option>');
                    });
                },
            });
        });
    });
</script>
@endpush