@extends('admin.master')
@section('title','movie management')
@section('page_title','Assign threator')
@section('body')
@php
use App\Components\Form;
@endphp

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            {{-- <h1 class="text-center my-2">Login</h1> --}}
            <div class="row">
                <div class="col-md-6">
                    <p>Duretion : <span>{{ $data->duretion }}</span> days</p>
                </div>
            </div>

			@include('message.message')
			<form action="{{url('admin/dashboard/movie/assign/display/'.$data->id)}}" method="POST">
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Select Threator</label>
                            <select name="threator_id" id="" class="form-control">
                                @foreach(movie_threator($data->id) as $movieth)
                                <option value="{{ threator_name(obj($movieth)->threator_id)->id }}">{{ threator_name(obj($movieth)->threator_id)->threator_name}}</option>,
                                @endforeach
                            </select>
                        </div>
                    </div>
					{{unset_session('old')}}
				   {{unset_session('errors')}}
				   <div class="col-md-12">
					<button class="btn btn-danger" name="status" value="draft">create +</button>
					{{-- <button class="btn btn-success" name="status" value="publish">Publish</button> --}}
				   </div>
				</div>
			</form>
        </div>
        <div class="col-md-12 mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>threator</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    @forelse(movie_threator($data->id) as $thdetail)
                    <?php $thdetail = obj($thdetail); ?>
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{threator_name($thdetail->threator_id)->threator_name}}</td>
                        <td>
                            <ul>
                                @foreach(movie_screen($data->id) as $movieScreen)
                                <li>* {{ screen_name(obj($movieScreen)->screen_id)->screen_name }}
                                    <ul>
                                        @foreach(movie_show($data->id) as $movieshow)
                                        <li> - {{ show_name(obj($movieshow)->shows_id)->show_name }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{url('admin/dashboard/movie/movietheator/edit/'.$data->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{url('admin/dashboard/movie/movietheator/delete/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
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
			$('.addcast').on('click',function(){
				var cast = '<tr>'+
							'<td>'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Cast Name" name="cast_name[]">'+
								'</div>'+
							'</td>'+
							'<td>'+
								'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
							'</td>'+
						'</tr>';
						$('.Cast').append(cast);
			})

			// $('#castfield').on('click', '.removecats', function() {
			// // $(this).closest('.cast-field').remove();
			// 	alert(true);
			// });

			// $('.removecats').on('click',function(){
			// 	// alert(true);
			// 	$(this).remove();
			// });

		});

		function removecast(v){
			// alert(v);
			$(v).parent().parent().remove();
		}
	</script>

	<script>
				$(document).ready(function(){
			$('.addproducres').on('click',function(){
				var producers = '<tr>'+
							'<td>'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Prodecure Name" name="producers_name[]">'+
								'</div>'+
							'</td>'+
							'<td>'+
								'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
							'</td>'+
						'</tr>';
						$('.producers').append(producers);
			})
		});

		function removecast(v){
			// alert(v);
			$(v).parent().parent().remove();
		}
	</script>

	<script>
		$(document).ready(function(){
	$('.adddirector').on('click',function(){
		var directors = '<tr>'+
					'<td>'+
						'<div class="form-group">'+
							'<input type="text" class="form-control" placeholder="Director Name" name="director_name[]">'+
						'</div>'+
					'</td>'+
					'<td>'+
						'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
					'</td>'+
				'</tr>';
				$('.directors').append(directors);
	})
	});

	function removecast(v){
	// alert(v);
	$(v).parent().parent().remove();
	}
	</script>



	<script>
		function imagepreview() {
				// alert(true);
				imagepriview.src = URL.createObjectURL(event.target.files[0]);
			}
	</script>


{{-- show data --}}
<script>
	$(document).ready(function(){
		$('#movie_show').on('click',function(){
			var id = $('#movie_threator').val();
		});
	});
</script>
@endpush