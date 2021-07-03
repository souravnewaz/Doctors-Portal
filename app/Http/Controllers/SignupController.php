<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;

class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function create(Request $request){
        $validator = $request->validate([
            'full_name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|confirmed|min:6|max:16',
            'password_confirmation' => 'required|min:6|max:16',
        ]);

        $user = new User;
        $user->email = $validator['email'];
        $user->password = $validator['password'];
        $user->user_type = 'user';
        $user->save();

        $patient = new Patient;
        $patient->full_name = $validator['full_name'];
        $patient->email = $validator['email'];
        $patient->save();
        
        return redirect('/login')->with('success', 'Registration successful');
    }
}
