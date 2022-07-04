<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\registrationdata;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function forgotpassword(){
        return view('forgotpassword');
    }

    public function forgotpost(Request $request){
        $request->validate(
            [
                'email' => 'required|email|exists:registration',
            ]
        );
        $userinfo = registrationdata::where('email','=',$request->email)->first();  //get line
        $request->session()->put('forgotemail',$userinfo->email);
        $request->session()->put('forgotpassword',$userinfo->password);
        $request->session()->put('forgotfname',$userinfo->fname);
        // dd($userinfo->password);
        return redirect('sendhtmlemail');
    }

   public function basic_email() {
      $data = array('name'=>"HJ KING");
   
      Mail::send(['text'=>'layouts.forgotpasswordmodel'], $data, function($message) {
         $message->to(session('forgotemail'), 'HII, '.session('forgotfname'))->subject
            ('ForgotPassword');
         $message->from('phptest1703@gmail.com','HARSH KING');
      });
    //   echo "Basic Email Sent. Check your inbox.";
    // return redirect('forgotpassword');
    return redirect()->back()->withErrors([
        'email' => 'MAIL SENT SUCCESSFULLY',
    ]);
   }
   public function html_email() {
      $data = array('name'=>"HJ KING");
      Mail::send('layouts.forgotpasswordmodel', $data, function($message) {
         $message->to(session('forgotemail'), 'HII, '.session('forgotfname'))->subject
            ('ForgotPassword');
            $message->from('xyz@gmail.com','HJ KING');
      });
    //   echo "HTML Email Sent. Check your inbox.";
    // return redirect('forgotpassword');
    return redirect()->back()->withErrors([
        'email' => 'MAIL SENT SUCCESSFULLY',
    ]);
   }
   public function attachment_email() {
      $data = array('name'=>"HJ KING");
      Mail::send('mail', $data, function($message) {
         $message->to(session('forgotemail'), 'HII, '.session('forgotfname'))->subject
            ('HJ');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
    //   echo "Email Sent with attachment. Check your inbox.";
    return redirect()->back()->withErrors([
        'email' => 'MAIL SENT SUCCESSFULLY',
    ]);
   }
}