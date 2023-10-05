@extends('admin.master')
@section('title','Post management')
@section('page_title','Post Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/post_management/create') }}" class="btn btn-info">Add Post <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Post Name</th>
                            <th>Categroy</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($post as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['title'] }}</td>
                            <td>{!! $data['description'] !!}</td>
                            <td>
                               <img src="{{ url($data['image']) }}" alt="" style="width: 100px;">
                            </td>
                         
                            <td>
                                @if($data['status'] == 'draft')
                                <span class='badge bg-danger'>{{ $data['status'] }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data['status'] }}</span> 
                                @endif
                            </td>    
                            <td>
                                <a href="{{url('admin/dashboard/post_management/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/post_management/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="8"> No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection