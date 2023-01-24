<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class custom_auth_controller extends Controller
{
    //returnView
    public function login(){

//       if ($request->session()->exists('users')) {
    
// }

    if (session()->has('admin')){
           return redirect()->action([manageissuesController::class,'show']);
    }
        return view('auth.login');
    }

    public function register(){
        return view('auth.registration');

  }

    public function userLogin(){
      if (session()->has('user1')){
        return  redirect()->action([searchController::class,'search']);
 }
      return view('auth.userlogin');
    }

    //login
    public function store(Request $request){
      $validated = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
        $admin = DB::table('createausers')
        ->where('email','=',$validated['email'])
        ->first();
        $validated>session()->put('admin', $validated['email']);
                // $request->session()->put('key', 'value');
              //  $validated['email']>session()->put('admin', $validated['email']);
               if(!$admin){
                return 
                 redirect()->action([custom_auth_controller::class,'login'])
                ->with
                ('error','Invalid Credentials!');
              } if (!Hash::check($validated['password'], $admin->password)) {
                return  redirect()->action([custom_auth_controller::class,'login'])
                ->with('error','Invalid Credentials!');
             } 
              return  redirect()->action([manageissuesController::class,'show']);
    }

    public function userauth(Request $request){
      //  $validated = $request;
       $email = $request->input('email');
       $password = $request->input('password');
       $user = DB::table('createausers')->where('email','=', $email)->first();
       $email>session()->put('user', $email);
      if(!$user){
        return  redirect()->action([custom_auth_controller::class,'userLogin'])
        ->with('error','Invalid Credentials!');
      } if (!Hash::check($password, $user->password)) {
       
        return  redirect()->action([custom_auth_controller::class,'userLogin'])
        ->with('error','Invalid Credentials!');
     } 
      return  redirect()->action([searchController::class,'search']);
  
    // $users = DB::table('createausers')->pluck('email');
    // $pass = DB::table('createausers')->pluck('password');
     
   
    //   if (!Hash::check($validated['password'], $pass)) {
    //     return new Response('Invalid password');
    // }  
    // return new Response('Valid password');

    
    }


     //create 
    public function create_user(Request $request){
            
        request()->validate([
            'fullname' => 'required',
            'detail' => 'required',
            'branch'=> 'required',
            'account'=> 'required',
        ]);
    
        Product::create($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');

      
        User::create([
            'fullname' => $request->fullname,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=>Hash::make($request->password),

        ]);

    }


    //registrationsc


  //fdfd
  public function auth(Request $request){

            //    dd($request); 
            User::create([
                'name' => $request->name,
                'email'=> $request->email,
                'password'=>Hash::make($request->password),

            ]);

      return redirect()->back()->with('success','User has been deleted');  
    }


    Public function adminlogout(){
       if (session()->has('admin')){
                      session()->pull('admin');      
       }    return redirect()->action( [custom_auth_controller::class,'login']);
    
    }

    Public function userlogout(){
      if (session()->has('user')){
             session()->pull('user');   

      } return  redirect()->action([custom_auth_controller::class,'userLogin']);
   
   }

          

   
}


    