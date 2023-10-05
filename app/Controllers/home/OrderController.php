<?php
namespace App\Controllers\home;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\Show;
use App\Models\Order;


class OrderController extends Controller
{
    public function Booking()
    {
        
    }

    public function ticketselect($id)
    {
        AuthMiddleware::Auth();
        // dd($id);
        // dd(get('screen_id'));
        $data['seat_id'] = $id;
        $data['screen_id'] = get('screen_id');
        $data['movie_id'] = get('movie_id');
        $data['show_id'] = get('show_id');
        $data['status'] = 0;
        $data['user_id'] = Auth()->id;
        $showdetail = Show::findorFail(get('show_id'));
        $data['amount'] = $showdetail->show_prize;

        Order::create($data);
        return back('success_message','your seat select successfull, please complete with in f minutes');
    }

    public function removeselect($id)
    {
        AuthMiddleware::Auth();
        Order::where('seat_id','=',$id)->where('user_id','=',Auth()->id)->delete();
        return back('success_message','your seat select successfull, please complete with in f minutes');
    }

    public function totalamount(RouteCollection $routes)
    {
        // dd("hello");
        $allslecetorder = Order::where('user_id','=',Auth()->id)->get();
        $totalamount = 0;
        foreach($allslecetorder as $order){
            $totalamount += $order['amount'];
        }

        return $totalamount;
    }

    public function payment_page(int $id, RouteCollection $routes)
    {
        AuthMiddleware::Auth();
        $order_detail = Order::where('user_id','=',Auth()->id)->where('status','=',0)->get();
        $order_single = Order::where('user_id','=',Auth()->id)->where('status','=',0)->first();
        // dd($order_single);
        $data =[
            'order_detail' => $order_detail,
            'movie_id' => $id,
            'order_single' => $order_single,
        ];
        return view('home.payment.payment_detail',$data);
    }

    public function ticket_page(RouteCollection $routes)
    {
        // AuthMiddleware::Auth();
        // $order_detail = Order::where('user_id','=',Auth()->id)->where('status','=',0)->get();
        // $order_single = Order::where('user_id','=',Auth()->id)->where('status','=',0)->first();
        // // dd($order_single);
        // $data =[
        //     'order_detail' => $order_detail,
        //     'order_single' => $order_single,
        // ];
        // dd(true);
        return view('home.payment.ticket_detail');
    }
}
