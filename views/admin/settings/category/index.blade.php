@extends('admin.master')
@section('title','Category management')
@section('page_title','Category Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/category/create') }}" class="btn btn-info">Add Category <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Slug</th>
                            <th>IS NAV</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($category as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['category_name'] }}</td>
                            <td>{{ $data['slug'] }}</td>
                            <td>
                                @if($data['is_nav'] == 0)
                                <span class='badge bg-danger'>No</span>
                                @else
                                <span class='badge bg-success'>Yes</span> 
                                @endif
                            </td>
                         
                            <td>
                                @if($data['status'] == 'draft')
                                <span class='badge bg-danger'>{{ $data['status'] }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data['status'] }}</span> 
                                @endif
                            </td>    
                            <td>
                                <a href="{{url('admin/dashboard/category/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/category/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
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