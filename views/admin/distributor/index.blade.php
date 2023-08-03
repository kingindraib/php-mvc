@extends('admin.master')
@section('title','dashboard')
@section('page_title','Distributor Management')
@section('body')

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{url('admin/dashboard/distributor/create')}}" class="btn btn-success">Add Distributor <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            @include('message.message')
            <div class="row my-3">            
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Distributor Name</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($distributor as $data)
                        <?php $i = 1; $data = obj($data); ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->distributor_name }}</td>
                            <td>{{ $data->distributor_code }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                <a href="{{url('admin/dashboard/distributor/edit/'.$data->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('admin/dashboard/distributor/delete/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                            </td>     
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="7">No data found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection