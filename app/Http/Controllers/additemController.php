<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;

class additemController extends Controller
{
    public function index()
    {
        if(session()->has('adminname'))
        {
            return view('additem');
        }
        else{
            return redirect('login');
        }
    }
    public function submit(Request $requestvariable)
    {
        $requestvariable->validate(
            [
                'pname' => 'required|unique:shop' ,
                'pdetail' => 'required',
                'pprice' => 'required|numeric|integer|digits_between:1,8',
                'pfile' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg'
            ]
        );
        // dd('done');

        $name = $requestvariable->file('pfile')->getClientOriginalName();
        $path = $requestvariable->file('pfile')->store('public/images');
        $shop = new shop;
        $shop->pname = strtoupper($requestvariable['pname']);
        $shop->details = strtoupper($requestvariable['pdetail']);
        $shop->price = $requestvariable['pprice'];
        $shop->imgurl = $requestvariable->file('pfile')->store('images');
        $shop->save();
        \Storage::deleteDirectory('images');
        return redirect('allproducts');
    }
}
