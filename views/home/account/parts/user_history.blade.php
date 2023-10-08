@extends('home.account.dashboard_master')
@section('dash_title','User History')
@php
use App\Components\Form;
@endphp
@section('user_account_body')
<div class="col-md-12 ">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Movie Name</th>
                <th>Ticket ID</th>
                <th>Date</th>
                <th>Show</th>
                <th>Time</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6">User History Will available only 7 days</td>          
            </tr>
        </tbody>
    </table>
</div>
@endsection