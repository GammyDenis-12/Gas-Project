<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manageissue;
use Illuminate\Support\Facades\Storage;
use DB;


class searchController extends Controller
{
    public function search(Request $request){
      $input= $request->inputSearch;
      if(!empty($input)){
           
        $search = DB::table('manageissues')
        // ->paginate(15)
        ->where('name', 'like', '%'.$input.'%')
        ->orwhere('detail', 'like', '%'.$input.'%')
        ->orwhere('branch', 'like', '%'.$input.'%')
        ->orwhere('account', 'like', '%'.$input.'%')
        ->paginate(5);
        
        // print_r($search);
        // dd($search);
       
         return view('main.search',["result"=>$search]);
      }else{
        return view('main.search');
      }
      
    }
    // public function issue($id){
    //   echo '<img src="'.asset("storage//issues_images//jacob.png").'">';
    // }

    public function show($id){

        $result =DB::table('manageissues')
        ->where('id','=',$id)->get();
        return view('main.showIssues',["result"=>$result]);   

    }
  
}