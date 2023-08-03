@extends('admin.master')
@section('title','Show Management')
@section('page_title','Show Management')
@section('body')
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{ url('admin/dashboard/movie/settngs/show/create') }}" class="btn btn-info">Add show <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Show Name</th>
                            <th>Screen Name</th>
                            <th>Show Price</th>
                            <th>offer price</th>
                            <th>Show time</th>
                            <th>show duretion</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($show as $data)
                        <tr>
                            <?php 
                                $data = obj($data);
                            ?>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->show_name }}</td>
                            <td>{{ screen_code($data->screen_code)->screen_name ?? 'N/A' }}</td>
                            <td>{{ $data->show_prize }}</td>
                            <td>{{ $data->offer_prize }}</td>
                            <td>{{ $data->show_time }}</td>
                            <td>{{ $data->show_duration }}</td>
                            <td>
                                @if($data->status == 'draft')
                                <span class='badge bg-danger'>{{ $data->status }}</span>
                                @else
                                <span class='badge bg-success'>{{ $data->status }}</span> 
                                @endif
                            </td>    
                            <td>
                                <a href="{{url('admin/dashboard/movie/settngs/show/edit/'.$data->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('aadmin/dashboard/movie/settngs/show/delete/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="10"> No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection

{{-- list out the detailed of the student having age between 24 to 26 using sql --}}
{{-- 
    select * from student where age between 24,26
    --}}