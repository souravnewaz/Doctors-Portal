<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\User;
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

    public function userList(Request $request){
        // $user = Patient::all();
        // dd($user);
        $users = Patient::all();
        return response()->json($users, 200);
    }

    public function show($id){
        $user = Patient::where('email', $id)->first();
        return $user;
    }

    public function create(Request $request){
        $user = new Patient;
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->save();

        $user = new User;
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->user_type = "user";
        $user->save();
        return ($user);
    }

    public function store(Request $request){
        $patient = $request->isMethod('put') ? Patient::where('email' , $request->id)->first() : new Patient;
        $patient->full_name = $request->input('full_name');
        $patient->email = $request->input('email');
        $patient->save();

        $user = User::where('email', $request->id)->first();
        $user->email = $request->input('email');
        $user->save();

        return ($user);
    
    }
        
    public function destroy(Request $request){
        $user = Patient::findOrFail($request->id);
        $user->delete();
        return ('deleted');
    }


    
}
