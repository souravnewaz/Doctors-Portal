<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = Patient::get();

        return view('admin.users', compact('users'));
    }

    public function view(){
        $user_email = request('email');
        $user = Patient::where('email', $user_email)->first();
        //dd($user->full_name);
        if(session('user_type') == 'admin'){
            return view('admin.user', compact('user'));
        } else{
            return view('user.profile')->with('user', $user);
        }

        
    }


    
}
