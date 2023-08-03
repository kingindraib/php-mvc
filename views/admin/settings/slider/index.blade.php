@extends('admin.master')
@section('title','dashboard')
@section('page_title','slider Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/movie/slider/create') }}" class="btn btn-info">Add slider <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>slider Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($slider as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['slider_name'] }}</td>
                            <td>
                                {{-- {{ $data['image'] }} --}}
                                <img src="{{getfile($data['image'])}}" alt="" style="width: 100px">
                            </td>
                            <td>
                                @if($data['status'] == 'draft')
                                <span class='badge bg-danger'>{{ $data['status'] }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data['status'] }}</span> 
                                @endif
                            </td>    
                            <td>
                                <a href="{{url('admin/dashboard/movie/slider/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/movie/slider/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="5"> No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection