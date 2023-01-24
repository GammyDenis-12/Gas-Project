<?php
namespace App\Http\Controllers;
use App\Models\createauser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
class user_controller extends Controller
{
    public function create_user(Request $request){
        

      createauser::create([
            'fullname'=> $request->fullname,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=>Hash::make($request->password),
        ]);

          //  auth()->login($user);
        return redirect()->action([user_controller::class, 'show'])->with('success','User has been added successfully') ;
    }
    
    public function show(){
      if (session()->has('user')){
        $data=createauser::get();
          return view('main.manageuser',compact('data'));
        //   return redirect()->action([custom_auth_controller::class, 'dashboard',['usercreation'=>$data]]);
          // return view('main.manageuser',['usercreation'=>$data]);
        
          return redirect()->action([user_controller::class, 'show']);
  }      
         return redirect()->action([custom_auth_controller::class,'login']); 

            // return $usercreation::all();
          
 }

      public function destroy($id) {
   createauser::where('id','=',$id)->delete();
   return redirect()->action([user_controller::class, 'show'])->with('success','User has been deleted') ;
  }

      public function editShow($id){

        // return view('main.edituser');
        $data=createauser::where('id','=',$id)->first();
        return view('main.edituser',compact('data'));
      }  

}
