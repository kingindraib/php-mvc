<?php
namespace App\Controllers\home;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\Show;
use App\Models\Order;
use App\Models\Account;

class EsewaController extends Controller
{
	public function payment_success(RouteCollection $routes)
	{
        
		if(get('q')){
            $res = get('q');
            // if($res == 'su'){

            // }
                // dd($res);
            if($res == 'su'){
                // dd(true);
    
                $url = "https://uat.esewa.com.np/epay/transrec";
                $data =[
                    'amt'=> total_selected_seat_price(),
                    'rid'=> get('refId'),
                    'pid'=> get('oid'),
                    'scd'=> 'EPAYTEST'
                ];
    
                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($curl);
                    curl_close($curl);
                    // dd($total_amount);
                    // strrpos()
    
                    if(strpos($response, "Success")){
                        // dd(true);
                        // $account['order_id'] = 
                        //    [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,]
                        // ;
                        // print this array data
                        // dd($account['order_id'][0]);
                        // dd($account);
                        $update_order = Order::where('user_id','=',Auth()->id)->get();
                        // dd($update_order);
                        $account['order_id'] = json_encode($update_order);
                        $account['pid'] = get('oid');
                        $account['refId'] = get('refId');
                        $account['totalAmount'] = get('amt');
                        $account['user_id'] = Auth()->id;
                        $account['status'] = 'success';
                        // dd($account);
                        foreach($update_order as $items){
                            if($items['status'] == 0){
                                $account['movie_id'] = $items['movie_id'];
                                $data['status'] = 1;
                                $data['payment_method'] = 'esewa';
                                Order::update($items['id'],$data);
                            }
                        }
                    //   dd($account);
                    Account::create($account);
                        set_message('success_message','Ticked Booked Success');
                        // return route('user/dashboard');    
                        return route('ticket/ticket_page');    
                    //    return redirect()->route('order.user.invoice')->with('success_message','Order placed Success'); 
                    }else{
                        // dd(false);
                        return back('error_message','Semethings error Please try again');
                    }
    
    
            }else{
                // dd(false);
               return back('error_message','Payment Failled Please try again');
            }
        }else{
            return back('error_message','something went wrong');
        }
	}
	public function payment_failled(RouteCollection $routes)
	{
		echo "Something error";
	}
}
	
