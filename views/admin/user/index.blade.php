@extends('admin.master')
@section('title','dashboard')
@section('page_title','User Management')
@section('body')
@php
$i = 1;    
@endphp

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            {{-- <a href="" class="btn btn-info">Add User <i class="fa-solid fa-user"></i></a> --}}
        </div>
        <div class="col-md-12">
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>role</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td>{{ $data['phone'] }}</td>
                            <td>
                                @if($data['user_type']==0)
                                user
                                @else 
                                admin
                                @endif
                            </td>
                            <td><span class='badge bg-success'>Active</span></td>     
                            <td>
                                {{-- <a href="{{url('admin/dashboard/movie/settngs/screen/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                                <a href="{{url('admin/dashboard/user/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="8">No data found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection