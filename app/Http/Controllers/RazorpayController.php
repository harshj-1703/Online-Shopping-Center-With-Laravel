<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use PDF;
use Redirect;
use App\Models\ordermaster;
use App\Models\addtocart;

class RazorpayController extends Controller
{
    // public function payment()
    // {        
    //     return view('rozorpay.index');
    // }

    public function paymentrazorpay(Request $request)
    {
        //Input items of form
        $input = $request->all();
        //get API Configuration 
        $api = new Api(config('custom.razor_key'), config('custom.razor_secret'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }

            date_default_timezone_set("Asia/Calcutta");
            // Do something here for store payment details in database...
            $addtocart = addtocart::where('addbyemail','=',session('email'))->where('status','=','1')->get();
            foreach($addtocart as $addtocart){
            $data = [
                ['pname'=>$addtocart->pname, 'price'=> $addtocart->price, 'quantity'=>$addtocart->quantity,
                'imgurl'=>$addtocart->imgurl, 'buyeremail'=> session('email'), 'purchasedatetime'=>date("d-m-Y h:i:sa"),
                'address'=>session('address'), 'razorpaypaymentid'=>$input['razorpay_payment_id']],
            ];
            ordermaster::insert($data); // Eloquent approach
            // \DB::table('ordermaster')->insert($data); // Query Builder approach
            }
            $request->session()->put('timebuy',date("d-m-Y h:i:sa")); 
            addtocart::where('addbyemail','=',session('email'))->delete();
        }
        
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect('bill');
    }
    public function gobuy()
    {
        return view('rozorpay.index');
    }
    public function getbill()
    {
        if(session()->has('success') && session()->has('itemname') && session()->has('fname')){
            return view('bill');
        }else{
            return redirect('login');
        }
    }
}