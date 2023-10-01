@extends('home.master')
@section('title',$movie_detail->movie_name)
@section('body')
<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-12 my-2 py-2 px-2 brade-camp">
            <span class="seat_title text-dark">Jaari</span>
            <p class="text-dark">url->Aud name | Date and time</p>
        </div>
    </div>
    <!-- new row -->
    <div class="seat_section">
        <div class="seat_label">
            <div class="seat_type">
                <input type="checkbox">
            <p>Available</p>
            </div>
            <div class="seat_type fast_felling">
                <input type="checkbox">
            <p>Fast feeling</p>
            </div>
            <div class="seat_type soldout">
                <input type="checkbox">
            <p>Slod Out</p>
            </div>
            <div class="seat_type expired">
                <input type="checkbox">
            <p>Expired</p>
            </div>
        </div>
        
        <div class="price_count">
            <p>Total :Rs. 200</p>
        </div>
    </div>

    @php
        $i=1;
    @endphp
    <!-- seat detail -->
    <div class="seat_detail">
        <div class="left_part">
            {{-- @for($i=0; $i<7; $i++) --}}
            {{-- @foreach($seat as $rowItems=>$row) --}}
            <?php
            //  dd(get_seat_status(1)->scalar);  
            // dd(Auth());
             ?>
            @foreach(seat_row_group($screen_id) as $rowItems=>$row)
            @if($rowItems<7)
            <div class="row mb-2">
                <ul class="seat_row">
                    @foreach(seat_column_group_data($row['row_id']) as $key=>$data)
                    @if($data['status']=='publish')
                    @if(empty(get_seat_status($data['id'])->scalar))
                    <li><a href="#" class="btn btn-success">{{ $data['seat_name'] }}</a></li>
                    @elseif(get_seat_status($data['id'])->status ==1)
                    <li><a href="#" class="btn btn-success">{{ $data['seat_name'] }}</a></li>
                    @elseif(get_seat_status($data['id'])->status ==0 && get_seat_status($data['id'])->user_id == Auth()->id)
                    <li><a href="#" class="btn btn-success">{{ $data['seat_name'] }}</a></li>
                    @endif
                    @else 
                    <li><a href="#" class="btn btn-secondary">{{ $data['seat_name'] }}</a></li>
                    @endif
                    @endforeach
                    {{-- <li><a href="#" class="btn btn-success">A2</a></li>
                    <li><a href="#" class="btn btn-success">A3</a></li>
                    <li><a href="#" class="btn btn-success">A4</a></li>
                    <li><a href="#" class="btn btn-success">A5</a></li>
                    <li><a href="#" class="btn btn-success">A6</a></li>
                    <li><a href="#" class="btn btn-success">A7</a></li> --}}
                </ul>
            </div>
            @endif
            @endforeach
            {{-- @endfor --}}



        </div>


        {{-- <div class="middle_part">
            @for($i=1; $i<=7; $i++)
            <div class="row mb-2">
                <ul class="seat_row">
                    <li><a href="#" class="btn btn-danger">A1</a></li>
                    <li><a href="#" class="btn btn-success">A2</a></li>
                    <li><a href="#" class="btn btn-success">A3</a></li>
                    <li><a href="#" class="btn btn-success">A4</a></li>
                    <li><a href="#" class="btn btn-success">A5</a></li>
                    <li><a href="#" class="btn btn-success">A6</a></li>
                    <li><a href="#" class="btn btn-success">A7</a></li>
                    <li><a href="#" class="btn btn-warning">A8</a></li>	
                    <li><a href="#" class="btn btn-warning">A9</a></li>
                    <li><a href="#" class="btn btn-secondary">A10</a></li>
                    <li><a href="#" class="btn btn-secondary">A11</a></li>
                    <li><a href="#" class="btn btn-success">A12</a></li>
                    <li><a href="#" class="btn btn-success">A13</a></li>
                </ul>
            </div>
            @endfor


        </div> --}}
        {{-- <div class="right_part">
            @for($i=1; $i<=7; $i++)
            <div class="row mb-2">
                <ul class="seat_row">
                    <li><a href="#" class="btn btn-danger">A1</a></li>
                    <li><a href="#" class="btn btn-success">A2</a></li>
                    <li><a href="#" class="btn btn-success">A3</a></li>
                    <li><a href="#" class="btn btn-success">A4</a></li>
                    <li><a href="#" class="btn btn-success">A5</a></li>
                    <li><a href="#" class="btn btn-success">A6</a></li>
                    <li><a href="#" class="btn btn-success">A7</a></li>
                </ul>
            </div>
            @endfor
        </div> --}}
    </div>

    <!-- screen -->
    <div class="row">
        <div class="screen">
            SCREEN HERE
        </div>
        <!-- <div class="seatConfirm col-md-12 text-center mt-3">
            <button class="btn btn-danger text-center">Buy Now</button>
        </div> -->
    </div>
</div>

@endsection