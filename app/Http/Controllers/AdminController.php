<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ordermaster;
use App\Models\registrationdata;
use App\Models\shop;
use App\Models\addtocart;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function adminhome(){
            if(session()->has('adminname')){

                // $year = ['AMZON ALEXA','BOAT AIRPODES','MAP',''];
            $get = ordermaster::groupBy('pname')->selectRaw('pname , sum(quantity) as totalquantity')->get();
            $count = $get->count();
            // ->pluck('totalquantity','pname');

            // echo "<pre>";
            // print_r($year->pname); //prints the data

            $pname = [];
            foreach($get as $value)
            {
                $pname[] = $value->pname;
            }
            $pname[$count] = [''];

            $total = [];
            foreach ($get as $value) {
                // $user[] = ordermaster::where(\DB::raw('pname'),$value)->count();
                // echo "<pre>";
                // print_r($value->totalquantity);
                $total[] = $value->totalquantity;
            }
            $total[$count] = [''];

            return view('adminhome')->with('pname',json_encode($pname,JSON_NUMERIC_CHECK))->with('total',json_encode($total,JSON_NUMERIC_CHECK));
            
        }else{
            return redirect('login');
        }
    }
    public function allorder(){
        if(session()->has('adminname')){
            // $registrationdata = registrationdata::all();
            $orderitems = ordermaster::join('registration', 'buyeremail', '=', 'email')->orderby('id','DESC')
            ->paginate(4, array('ordermaster.*','fname','lname')); //join query for join ordermaster and registration table and pagination
            // echo "<pre>";
            // print_r($orderitems->all()); //prints the data
            $data = compact('orderitems');
            return view('allorder')->with($data);
        }else{
            return redirect('login');
        }
    }
    public function allusers(){
        if(session()->has('adminname')){
            $registration = registrationdata::orderby('user_id','DESC')->paginate(10);
            $data = compact('registration');
            return view('allusers')->with($data);
        }else{
            return redirect('login');
        }
    }
    public function allproducts(){
        if(session()->has('adminname')){
            $shop = shop::orderby('id','DESC')->paginate(4);
            $data = compact('shop');
            return view('allproducts')->with($data);
        }else{
            return redirect('login');
        }
    }
    public function itemchange(Request $request , $id){
        $userinfo = shop::where('id','=',$request->id)->first();  //get line
        if(addtocart::where('pname', '=', $userinfo->pname)->where('status','=','1')->count() > 0){
            addtocart::where('pname',$userinfo->pname)->update(array('status'=>'0'));
        }
        if($userinfo->status =='1')
        {
            shop::where('id',$userinfo->id)->update(array('status'=>'0'));
        }else{
            shop::where('id',$userinfo->id)->update(array('status'=>'1'));
        }
        return redirect()->back();
    }
}
