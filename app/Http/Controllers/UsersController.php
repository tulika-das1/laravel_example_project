<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsertData;

class UsersController extends Controller
{
 public function getData(Request $request){

    $insert_data = new InsertData;
    $insert_data->name =$request->name;
    $insert_data->address =$request->address;
    $insert_data->gmail =$request->gmail;
    $insert_data->save();

    //   print_r($request->input());
   }
   public function showForm(){
       return view('insertform');
   }
}
