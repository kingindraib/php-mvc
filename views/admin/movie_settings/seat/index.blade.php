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
                            <th>Seat Name</th>
                            <th>Screen</th>
                            <th>Row</th>
                            <th>Column</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($seat as $data)
                        <?php $data = obj($data); ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->seat_name }}</td>
                            <td>{{ screen_name($data->screen_id)->screen_name }}</td>
                            <td>{{ seat_row($data->row_id)->row_name }}</td>
                            <td>{{ seat_column($data->column_id)->column_name }}</td>
                            <td>{{ $data->created_at }}</td> 
                            <td>
                                @if($data->status == 'publish')
                                <span class="badge badge-danger text-dark">{{$data->status}}</span>
                                @else 
                                <span class="badge badge-success text-danger">{{$data->status}}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{url('admin/dashboard/movie/settngs/seat/edit/'.$data->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/movie/settngs/seat/delete/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
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