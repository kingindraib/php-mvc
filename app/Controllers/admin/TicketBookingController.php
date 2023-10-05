<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Account;



class TicketBookingController extends Controller{

    public function index(RouteCollection $routes)
    {
        $booking = Account::get();
        $data = 1;
        return view('admin.ticket_settings.booking.index',compact('booking','data'));
    }

}