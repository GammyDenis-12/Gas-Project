<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registration_cotroller extends Controller
{
      public function register(){
            return view('auth.registration');

      }

      public function auth(Request $request){
        $data=$request;

        print_r($data);
      }
}
