@extends('admin.master')
@section('title','threator management')
@section('page_title','Threator Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/movie/settngs/threator/create') }}" class="btn btn-info">Add Threator <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Threator Name</th>
                            <th>Threator Code</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($threator as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['threator_name'] }}</td>
                            <td>{{ $data['threator_code'] }}</td>
                            <td>{{ $data['created_at'] }}</td>
                            <td>
                                @if($data['status'] == 'draft')
                                <span class='badge bg-danger'>{{ $data['status'] }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data['status'] }}</span> 
                                @endif
                            </td>    
                            <td>
                                <a href="{{url('admin/dashboard/movie/settngs/threator/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/movie/settngs/threator/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
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