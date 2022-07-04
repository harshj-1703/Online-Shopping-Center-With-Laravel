<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;
use App\Models\addtocart;
use App\Models\ordermaster;
use App\Models\registrationdata;

class profileController extends Controller
{
    public function index()
    {
            // $shop1 = shop::all();
            $shop1 = shop::where('status','=','1')->orderBy('id','DESC')->get(); //for latest product first
            // $ms = Person::where('name', 'Foo Bar'); //filter
            $addtocart = addtocart::where('status','=','1')->where('addbyemail','=',session('email'))->get();
            $data1 = compact('shop1');
            $data2 = compact('addtocart');
            return view('profile')->with($data1)->with($data2);
    }
    public function search(Request $request)
    {
            $search = $request['search'];
            if($search == '')
            {
                $shop1 = shop::where('status','=','1')->orderBy('id','DESC')->get(); //for latest product first
                $addtocart = addtocart::where('status','=','1')->where('addbyemail','=',session('email'))->get();
                $data1 = compact('shop1');
                $data2 = compact('addtocart');
                return view('profile')->with($data1)->with($data2);
            }
            else{
                $shop1 = shop::where('status','=','1')->orderBy('id','DESC')->where('pname','like','%'.$search.'%')->get(); //for latest product first
                $addtocart = addtocart::where('status','=','1')->where('addbyemail','=',session('email'))->get();
                $data1 = compact('shop1');
                $data2 = compact('addtocart');
                return view('profile')->with($data1)->with($data2);
            }
    }
    public function lowtohigh()
    {
            // $shop1 = shop::all();
            $shop1 = shop::where('status','=','1')->orderBy('price','ASC')->get(); //for latest product first
            $addtocart = addtocart::where('status','=','1')->where('addbyemail','=',session('email'))->get();
            $data1 = compact('shop1');
            $data2 = compact('addtocart');
            return view('profile')->with($data1)->with($data2);
    }

    public function hightolow()
    {
            $shop1 = shop::where('status','=','1')->orderBy('price','DESC')->get(); //for latest product first
            $addtocart = addtocart::where('status','=','1')->where('addbyemail','=',session('email'))->get();
            $data1 = compact('shop1');
            $data2 = compact('addtocart');
            return view('profile')->with($data1)->with($data2);
    }

    public function group()
    {
        return registrationdata::with('group')->get();
    }
}
