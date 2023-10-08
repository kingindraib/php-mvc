@extends('admin.master')
@section('title','Online Ticket Booked')
@section('page_title','Ticket Management')
@section('body')
<?php
// print_r($booking);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        {{-- <div class="col-md-5">
            <a href="{{ url('admin/dashboard/movie/settngs/screen/create') }}" class="btn btn-info">Add Screen <i class="fa-solid fa-film"></i></a>
        </div> --}}
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Movie Name</th>
                            <th>Product ID</th>
                            <th>Total Amount</th>
                            <th>Order ID</th>
                            <th>Booked Date</th>
                            <th>Status</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($booking as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data['user_id'] }}</td>
                            <td>{{ $data['user_id'] }}</td>
                            <td>{{ $data['user_id'] }}</td>
                            <td>{{ $data['user_id'] }}</td>
                            <td>{{ $data['user_id'] }}</td>
                            <td>
                                @if($data['status'] == 'draft')
                                <span class='badge bg-danger'>{{ $data['status'] }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data['status'] }}</span> 
                                @endif
                            </td>    
                            {{-- <td>
                                <a href="{{url('admin/dashboard/movie/settngs/screen/edit/'.$data['id'])}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/movie/settngs/screen/delete/'.$data['id'])}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td>  --}}
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