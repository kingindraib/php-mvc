@extends('home.master')
@section('title',movie_detail($movie_id)->movie_name)
@section('body')
<div class="container-md mt-4">
    <div class="row">
        <div class="col-md-5 ml-4">
            <form action="" class="payment_form">
                <h2>Payment Confirm</h2>
                <div class="ticket_payment">
                    <h3>Ticket Detail</h3>
                <p>Ticket Amount <span>Rs. {{ total_selected_seat_price(); }}</span></p>
                <p>Selected Seat <span>
                    @foreach($order_detail as $od)
                    {{seat_detail($od['seat_id'])->seat_name}},
                    @endforeach    
                </span></p>
                <p>Total <span>Rs. {{ total_selected_seat_price(); }}</span></p>
                </div>
                <hr>
                <div class="promo ticket_payment">
                    <h3>Promo & Voucher</h3>
                    <p>Promo code <span>N/A</span></p>
                </div>
                <hr>
                <div class="grand_total ticket_payment">
                    <h2>Grand Total <span>Rs.{{ total_selected_seat_price(); }}</span></h2>

                    <form action="https://uat.esewa.com.np/epay/main" method="POST">
                        <input value="{{ total_selected_seat_price(); }}" name="tAmt" type="hidden">
                        <input value="{{ total_selected_seat_price(); }}" name="amt" type="hidden">
                        <input value="0" name="txAmt" type="hidden">
                        <input value="0" name="psc" type="hidden">
                        <input value="0" name="pdc" type="hidden">
                        <input value="EPAYTEST" name="scd" type="hidden">
                        <input value="{{ generate_random_string(); }}" name="pid" type="hidden">
                        <input value="{{ url('page/esewa_payment_success?q=su') }}" type="hidden" name="su">
                        <input value="{{ url('page/esewa_payment_failed?q=fu') }}" type="hidden" name="fu">
                        <!-- <input value="Submit" type="submit"> -->
                        <div class="btn-group">
                            <button class="btn btn-danger btn-buy" type="submit">Pay from Esewa</button>
                        </div>
                        </a>
        
                        <br>
                      </form>
               
                </div>
            </form>    
        </div>
		<div class="col-md-5 mr-4">
			<div class="row ticket-main">
				<div class="col-md-8">
					<h3>Schedule Detail</h3>
					<div class="detail_schedule">
						<h4>Movie Title</h4>
						<p>{{movie_detail($movie_id)->movie_name}}</p>
						<h4>Date</h4>
						<p>{{ carbon_date_formattor($order_single->created_at); }}</p>
						<h4>Time</h4>
						<p>{{ show_detail($order_single->show_id)->show_time }}</p>
						<h4>Seat</h4>
						<p> @foreach($order_detail as $od)
                            {{seat_detail($od['seat_id'])->seat_name}},
                            @endforeach
                        </p>

					</div>
				</div>
				<div class="col-md-4">
					<img src="{{url(movie_detail($movie_id)->image)}}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
    </div>
</div>

@endsection
@push('home_script')
@endpush