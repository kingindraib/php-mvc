@extends('home.account.dashboard_master')
@section('dash_title','My Ticket')
@php
use App\Components\Form;
$i = 1;
@endphp
@section('user_account_body')
<div class="col-md-12 ">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Movie Name</th>
                <th>Ticket ID</th>
                <th>generated Date</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @forelse($myticket as $key=>$data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{movie_detail($data['movie_id'])->movie_name}}</td>
                
                <td>{{ $data['pid'] }}</td>
                <td>{{$data['created_at']}}</td>
                <td>N/A</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">NO data Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection