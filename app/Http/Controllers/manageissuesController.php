<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manageissue;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
class manageissuesController extends Controller
{
     public function index(){
        return view('main.manageissues');
     }

     public function post(Request $request){ 
      
         if(!$request['name'] || !$request['detail'] || !$request['branch'] || !$request['account']){
             return redirect()->action([manageissuesController::class, 'show']) 
             ->with("error","Please Fill Out All Fields To Proceed");
         }
            if ($request['image'] == NULL){
               
            manageissue::create([
               "name"=>$request->name,
               "detail"=>$request->detail,
               "branch"=>$request->branch,
               "account"=>$request->account,
            ]);   
           
         return redirect()->action([manageissuesController::class, 'show']) 
         ->with('success','Issue has been added successfully.');
          } else {
            $filename = $request->name.'.'.$request->image->extension();
            $request->image->storeAs('public/issues_images',  $filename);
             
            manageissue::create([
               "name"=>$request->name,
               "detail"=>$request->detail,
               "branch"=>$request->branch,
               "account"=>$request->account,
               "image"=>"issues_images/".$filename,
            ]);   
           
         return redirect()->action([manageissuesController::class, 'show']) 
         ->with('success','Issue has been added successfully.');
                  
           }

         //    $filename = $request->name.'.'.$request->image->extension();
         //    $request->image->storeAs('public/issues_images',  $filename);
             
         //    manageissue::create([
         //       "name"=>$request->name,
         //       "detail"=>$request->detail,
         //       "branch"=>$request->branch,
         //       "account"=>$request->account,
         //       "image"=>"issues_images/".$filename,
         //    ]);
           
         // return redirect()->action([manageissuesController::class, 'show']) 
         // ->with('success','Issue has been added successfully.');

     } 
     public function show(){

     if (session()->has('admin')){
         $issue=manageissue::get();
           return view('main.manageissues',compact('issue'));
       
   }   
    return view('auth.login');

       
        
     }

     public function destroy_issues($id){

        manageissue::where('id','=',$id)->delete();
   return redirect()->action([manageissuesController::class, 'show'])
   ->with('success','Issue has been deleted successfully.');
     }
       
     public function editShow($id){
         $data=manageissue::where('id','=',$id)->first();
         return view('main.edit',compact('data'));
     }

     public function editData(Request $req){
         
         $id=$req->id;
         $name=$req->name;
         $detail=$req->detail;
         $branch=$req->branch;
         $account=$req->account;

         manageissue::where('id','=',$id)->update([
         
            'name'=>$name,
            'detail'=>$detail,
            'branch'=>$branch,
            'account'=>$account

         ]);
         return redirect()->action([manageissuesController::class, 'show'])
         ->with('success','Issue has been updated successfully.');
   
   }
  

}
