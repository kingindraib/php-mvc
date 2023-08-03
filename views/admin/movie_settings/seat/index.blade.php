@extends('admin.master')
@section('title','seat management')
@section('page_title','seat Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/movie/settngs/seat/create') }}" class="btn btn-info">Add Seat <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Seat Row Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($seat as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ obj($data)->seat_name }}</td>
                            <td>{{ obj($data)->created_at }}</td> 
                            <td>
                                <a href="{{url('admin/dashboard/movie/settngs/seat/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/movie/settngs/seat/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="4"> No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection