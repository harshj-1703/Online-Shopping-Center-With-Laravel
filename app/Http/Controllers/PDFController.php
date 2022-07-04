<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\addtocart;
use App\Models\ordermaster;

class PDFController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // public function generateInvoicePDF()
    // {
    //     if(session()->has('success') && session()->has('itemname') && session()->has('fname')){
    //     $pdf = PDF::loadView('layouts.billview');
    //     return $pdf->download('BILL.pdf');
    //     }
    //     else{
    //         return redirect('login');
    //     }
    // }
    public function generateInvoicePDFcart()
    {
        if(session()->has('success') && session()->has('itemname') && session()->has('fname')){
        // $addtocart = addtocart::where('addbyemail','=',session('email'))->get();
        // $pdf = PDF::loadView('layouts.cartbillview',compact('addtocart'));
        // addtocart::where('addbyemail','=',session('email'))->delete();
        $addtocart = ordermaster::where('purchasedatetime','=',session('timebuy'))->get();
        $pdf = PDF::loadView('layouts.cartbillview',compact('addtocart'));
        return $pdf->download('BILL-CART.pdf');
        }
        else{
            return redirect('login');
        }
    }
}