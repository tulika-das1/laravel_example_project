<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Session;

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
            'gmail' => ['required','email'],
            'password' => ['required'],
            // 'datetime' => ['required','date','date_format:Y-m-d\TH:i:s'],
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

    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        // ['db-col' => $request->email, 'pass-col' => $request->pass]

        if(Auth::attempt($credentials)){
            Session::regenerate();
            return redirect()->intended(route('dashboard'));
         }else{
             return back()
             ->withInput(
                $request->except('password')
             )
             ->withErrors([
                'email' => 'Your credentials does not match with our'
             ]);
         }
    }

    public function dashboard(){
        return view('auth.dashboard');
    }
   
    public function logout(){
        Auth::logout();
 
        Session::invalidate();
     
        Session::regenerateToken();
     
        return redirect(route('login'));
    }

}
