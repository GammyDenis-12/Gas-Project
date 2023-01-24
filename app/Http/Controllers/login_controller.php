<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){
            
        // dd($request);
    
       $data = $request;
    //    print_r($data);
       if($data['username'] == 'lino@gmail.com' && $data['password']=='lino'){
        return view('main.index');
       }else{
        return "ivalid username and password";
       } 
    }
    }

