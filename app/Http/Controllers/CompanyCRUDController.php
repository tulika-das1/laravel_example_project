<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyCRUDController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function savePost(Request $request){
        $add_Post = new Company;
        $add_Post->name = $request->name;
        $add_Post->email = $request->gmail;
        $add_Post->address = $request->address;
        $add_Post->save();
    }

    public function updatePost(Request $request, Company $company){
        $company->update([
            'name' => $request->name,
            'email' => $request->gmail,
            'address' => $request->address,
        ]);

        return back();
    }

    public function postList(){
        $companies = Company::all();
        return view('post-list', ['companies' => $companies]);
    }

    public function editPost(Company $company){
        return view('edit-post', ['company' => $company]);
    }

    public function deletePost($id){
       Company::where('id', $id)->delete();
        return redirect()->route('post.add');
    }

}
