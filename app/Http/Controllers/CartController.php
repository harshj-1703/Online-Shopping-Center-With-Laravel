<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addtocart;
use App\Models\shop;
use Carbon\Carbon;

class CartController extends Controller
{
    public function index(Request $requestvariable,$id){

        $userinfo = shop::where('id','=',$requestvariable->id)->first();  //get line
        if (addtocart::where('pname', '=', $userinfo->pname)->where('addbyemail','=',session('email'))->where('status','=','1')->count() > 0){
            // dd("exists");
            $userinfocart = addtocart::where('pname','=',$userinfo->pname)->where('status','=','1')->where('addbyemail','=',session('email'))->first();  //get line
            addtocart::where('pname',$userinfo->pname)->where('addbyemail','=',session('email'))->where('status','=','1')->update(array('quantity'=>($userinfocart->quantity)+1) );
        }
        else{
        $addtocart = new addtocart;
        $addtocart->pname = $userinfo->pname;
        $addtocart->price = $userinfo->price;
        $addtocart->imgurl = $userinfo->imgurl;
        $addtocart->addbyemail = session('email');
        $addtocart->save();
        }
        //return redirect('profile');
        return redirect('cart');
    }
    public function gocart(Request $requestvariable){
        if(session()->has('fname')){
            $cart = addtocart::where('addbyemail','=',session('email'))->where('status','=','1')->get();
            // $cart = shop::orderBy('id','DESC')->get();
            $data = compact('cart');
            return view('cart')->with($data);
        }else{
            return redirect('login');
        }
    }
    public function cartreduce(Request $requestvariable , $id)
    {
        $userinfo = addtocart::where('id','=',$requestvariable->id)->first();  //get line
        if($userinfo->quantity >1)
        {
            addtocart::where('id',$userinfo->id)->where('addbyemail','=',session('email'))->update(array('quantity'=>($userinfo->quantity)-1) ); 
            return redirect()->back();
        }
        else if($userinfo->quantity == 1)
        {
            addtocart::where('id',$userinfo->id)->where('addbyemail','=',session('email'))->update(array('quantity'=>($userinfo->quantity)-1) ); 
            // dd($userinfo->pname);
            addtocart::where('id',$userinfo->id)->where('addbyemail','=',session('email'))->delete(); 
            return redirect()->back();
        }
        else
        {
            return redirect()->back(); 
        }
    }
    public function cartadditem(request $requestvariable , $id)
    {
        $userinfo = addtocart::where('id','=',$requestvariable->id)->where('status','=','1')->first();  //get line
        addtocart::where('id',$userinfo->id)->where('status','=','1')->where('addbyemail','=',session('email'))->update( array('quantity'=>($userinfo->quantity)+1) ); 
        return redirect()->back(); 
    }
    public function cartitemremove(request $requestvariable , $id){
        $userinfo = addtocart::where('id','=',$requestvariable->id)->where('status','=','1')->first();  //get line
        addtocart::where('id',$userinfo->id)->where('status','=','1')->where('addbyemail','=',session('email'))->delete(); 
        return redirect()->back();
    }
    public function removeallitem(){
        addtocart::where('addbyemail','=',session('email'))->where('status','=','1')->delete();
        // addtocart::all()->delete();
        return redirect('profile');
    }
}