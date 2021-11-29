<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;

class CustamAuthController extends Controller
{

    // public function __construct()

    // {
    //     $this ->middleware('auth');
    // }
    
        public function user(){

            return view('user.user');


        }


        public function admin(){

            return view('admin.admin');
            
        }

        public function checkAdmin(Request $request){


            $this->validate($request,[
                'email'=>'required|email',
                'password'=>'required|min:6'
            ]);

            if(Auth::guard('admin')->attempt([

                'email'=>$request->email,
                'password'=>$request->password
            ])){
                return redirect()->intended('admin');
            }
            return back()->withInput($request->only('email'));




        }





}
