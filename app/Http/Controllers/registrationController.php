<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrationdata;
use App\Models\addtocart;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function submitform(Request $requestvariable)
    {
        $requestvariable->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:registration',
                'password' => 'required',
                'confirmpassword' => 'required|same:password',
                'dob' => 'required',
                'gender' => 'required',
                'phoneno' => 'required|unique:registration|min:10|max:10',
                'address' => 'required|max:250',
            ]
        );
        // echo "<pre>";
        // print_r($requestvariable->all()); //prints the data

        $registration = new registrationdata;
        $registration->fname = strtoupper($requestvariable['firstname']);
        $registration->lname = strtoupper($requestvariable['lastname']);
        $registration->password = bcrypt($requestvariable['password']);
        $registration->dob = $requestvariable['dob'];
        $registration->gender = $requestvariable['gender'];
        $registration->email = $requestvariable['email'];
        $registration->phoneno = $requestvariable['phoneno'];
        $registration->address = $requestvariable['address'];
        // $registration->subject = $requestvariable['selectsubject'];
        $registration->save();
        return redirect('login');
    }

    public function indexlogin()
    {
        return view('login');
    }

    public function submitloginform(Request $requestvariable)
    {
        $requestvariable->validate(
            [
                'email' => 'required|email|exists:registration',
                'password' => 'required',
            ]
        );

        // dd(\Auth::attempt(['email' => $requestvariable['email'] , 'password' => $requestvariable['password']]));

        if($requestvariable->email == 'harsh@gmail.com' && $requestvariable->password == 'harsh@1703')
        {
            $requestvariable->session()->put('adminname','HARSH JOLAPARA'); //name , value of session
            return redirect('adminhome');   
        }
        
        else{

        $userinfo = registrationdata::where('email','=',$requestvariable->email)->first();  //get line

        // if(\Auth::attempt(['email' => $requestvariable['email'] , 'password' => $requestvariable['password']])){
        //     // return view('profile');
        //     dd('done');
        // }else{
        //     dd('not login');
        // }
        
        if(\Hash::check($requestvariable->password , $userinfo->password)){
            // dd("SUCCESS");
            $requestvariable->session()->put('fname',$userinfo->fname);   //name , value of session
            $requestvariable->session()->put('lname',$userinfo->lname);
            $requestvariable->session()->put('email',$userinfo->email);
            $requestvariable->session()->put('phoneno',$userinfo->phoneno);
            $requestvariable->session()->put('address',$userinfo->address);
            return redirect('profile');
        }else if($requestvariable->password == $userinfo->password)
        {
            $requestvariable->session()->put('fname',$userinfo->fname);   //name , value of session
            $requestvariable->session()->put('lname',$userinfo->lname);
            $requestvariable->session()->put('email',$userinfo->email);
            $requestvariable->session()->put('phoneno',$userinfo->phoneno);
            return redirect('profile');
        }
        else {
            // dd("UNSUCCESS");
            return redirect()->back()->withInput($requestvariable->only('email', 'remember'))->withErrors([
                'password' => 'Wrong password',
            ]);
        }}
    }
    
    public function logout(){
        session()->flush();
        return redirect('login');
    }
}