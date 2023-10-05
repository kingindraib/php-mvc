<?php
namespace App\Controllers\home;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\Show;
use App\Models\Order;

class EsewaController extends Controller
{
	public function payment_success(RouteCollection $routes)
	{
		if(get('q')){
            $res = get('q');
            // if($res == 'su'){

            // }

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
                        $update_order = Order::where('user_id',auth()->user()->id)->get();
                        foreach($update_order as $items){
                            if($items['status'] == 0){
                                $data['status'] = 1;
                                Order::update($items->id,$data);
                            }
                        }
    
                        // set_message('success_message','distributor Updated Success');
                        // return route('admin/dashboard/distributor/index');    
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
		
	}
}
	
