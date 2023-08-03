@extends('admin.master')
@section('title','Movie Management')
@section('page_title','Movie Management')
@section('body')

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="{{url('admin/dashboard/movie/create')}}" class="btn btn-info">Add Movie <i class="fa-solid fa-video"></i></a>
        </div>
       
        <div class="col-md-12">
            @include('message.message')
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Movie Name</th>
                            <th>Threator</th>
                            <th>Screen</th>
                            <th>Release date</th>
                            <th>Duration</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse($movie as $data)
                        <?php $data = obj($data); ?>
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->movie_name }}</td>
                            <td>
                               @foreach(movie_threator($data->id) as $movieth)
                               <span>{{ threator_name(obj($movieth)->threator_id)->threator_name ?? 'N/A'}}</span>,
                               @endforeach
                            </td>
                            <td>
                                @forelse (movie_screen($data->id) as $movie_screens)
                                    
                                @empty
                                    <span>not assign at...</span>
                                @endforelse
                                
                            </td>
                            <td>{{ $data->release_date }}</td>
                            <td>
                                {{$data->duretion}} days
                            </td>
                            <td><span class='badge bg-success'>Active</span></td>    
                            <td>
                                <a href="{{url('admin/dashboard/movie/settngs/screen/edit/'.$data->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{url('admin/dashboard/movie/assign/'.$data->id)}}" class="btn btn-success"><i class="fas fa-wrench"></i></a>
                                  <a href="{{url('admin/dashboard/movie/edit/'.$data->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                  <a href="{{url('admin/dashboard/movie/delete/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                            </td> 
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="8">No data Found</td>
                        </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection