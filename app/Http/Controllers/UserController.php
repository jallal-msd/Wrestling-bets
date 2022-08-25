<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function store(Request  $request){

       $user =  $request->validate([
            'name' =>'required',
            'email' =>'required',
            'password' =>'required|confirmed',
        ]);

       $user['password'] = bcrypt($user['password']);

       User::create($user);
       return  redirect('/');
    } 

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function authenticate(Request $request){

        $credential = $request->validate([
            'email' =>['required', 'email'],
            'password' => 'required'

        ]);

        if(Auth::attempt($credential)){

            $request->session()->regenerate();

            return redirect('/')->with('message' ,"welcome:".$request->name);
        }

        return back()->withErrors([
            'email'=>'invalid credentials'
        ])->onlyInput('email');

    }


   
}
