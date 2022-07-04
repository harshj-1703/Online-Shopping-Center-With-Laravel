<?php

namespace App\Http\Controllers;
use App\Models\shop;
use App\Models\addtocart;
use App\Models\ordermaster;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(Request $request)
    {
        if(session()->has('fname')){
            // $shop1->id = $request['hidden'];
            $shopinfo = shop::where('id','=',$request['hidden'])->first();
            // dd($shopinfo->pname);
            $data = compact('shopinfo');
            $request->session()->put('itemname',$shopinfo->pname);
            $request->session()->put('itemprice',$shopinfo->price);   //name , value of session
            $request->session()->put('itemdetails',$shopinfo->details);
            $request->session()->put('itemimg',$shopinfo->imgurl);
            return view('product')->with($data);
            // dd($shopitem->pname);
            // return redirect('product');
        }else{
         return redirect('login');
        }
    }    
    public function loop(){
        return redirect('profile');
    }
    public function payment(){
        return redirect('profile');
    }
    public function paymentpost(Request $request)
    {
        if(session()->has('fname') && session()->has('itemname')){
            // $shop1->id = $request['hidden'];
            // $shopinfo = shop::where('id','=',$request['hidden'])->first();
            // // dd($shopinfo->pname);
            // $data = compact('shopinfo');
            // return view('payment')->with($data);
            // // dd($shopitem->pname);
            // // return redirect('product');
            return view('payment');
            // route('paywithrazorpay');
        }else{
         return redirect('login');
        }
    } 
    public function cartpost(Request $request)
    {
        if(session()->has('fname'))
        {
            $sessionputtotal = $request['totalhidden'];
            // $shopinfo = shop::where('id','=',$request['hidden'])->first();
            // dd($sessionputtotal);
            // $data = compact('shopinfo');
            // return view('payment')->with($data);
            // // dd($shopitem->pname);
            // // return redirect('product');
            $request->session()->put('itemname',"CART ALL ITEM");
            $request->session()->put('itemimg',"----");
            $request->session()->put('itemdetails',"ALL ITEMS ARE NICE");
            $request->session()->put('itemprice',$sessionputtotal);
            return view('payment');
            // route('paywithrazorpay');
        }else{
         return redirect('login');
        }
    } 
}
