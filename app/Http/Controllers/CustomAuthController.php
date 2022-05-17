<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function registrationUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'gmail' => ['required'],
            'password' => ['required'],
        ]);
        $user = new UserData();
        $user->name = $request->name;
        $user->email = $request->gmail;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'User created successfully');
        }else{
            return back()->with('error', 'User not created');
        }
    }
}
