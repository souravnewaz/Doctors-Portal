<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        //$request->session()->flush();
        return view('login');
    }

    public function login(Request $request){
        
        $validator = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:6|max:16',
        ]);

        $email = $validator['email'];
        $password = $validator['password'];

        if(User::where('email', $email)->exists()){
            $user = User::where('email', $email)->where('password', $password)->first();
            if($user){
                session(['user' => $user->email, 'user_type' => $user->user_type ]);
                if($user->user_type == "admin"){
                   return redirect('/admin-dashboard');
                }
                else if($user->user_type == "doctor"){
                    dd('Doctor');
                }
                else if($user->user_type == "user"){
                    return redirect('/');
                }
            } else{
                dd('password mismatch');
            }
        } else{
            dd('Email address not found');
        }

    }
}
