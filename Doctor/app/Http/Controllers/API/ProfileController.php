<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getprofile($uname){

        $user = User::where('name', $uname)->get();
        
        return $user;


    }     

    
    public function Profile($name)
    {
        $user = User::where('name', $name)->get();
        error_log("_________________________________________");
        error_log($user);
        return $user;
        // $name =  $request->session()->get('name');
        // $user = User::table('user')
        // ->where('name', $name)
        // ->first();
        // $name = $user -> name;

        // if($user)
        // {
        //     return response()->json([
        //         'status'=>200,
        //         'user'=>$user,
        //     ]);

        // }

        // else
        // {
        //     return response()->json([
        //         'status'=>404,
        //         'message'=>'User Id Not Found ',
        //     ]);

        // }

    }

    public function updateprofile(Request $request,$id)
    {
        // error_log("_________________________________________");
        
        //  dd($request->all());
        // error_log($request);
        // $user = User::where('name', $id)->put();
        $user = User::find($request->id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        // $user->password=$request->input('password');
        $user->title=$request->input('title');
        $user->address=$request->input('address');
        $user->country=$request->input('country');
        $user->save();

        // $update->save();
        // error_log("_________________________________________");
        // error_log($update);
        if($user)
        {
             return true;
         error_log("_________________________________________");
        error_log($user);
        }
        else{
            return false;
        }
        

        // $validator= Validator::make($request->all(), [

        //      'name'=>'required|min:3|max:15',
        //      'email'=>'required',
        //      'password'=>'required|min:4|max:8',
        //      'title'=>'required',
        //      'address'=>'required',
        //      'country'=>'required',

            
        // ]);
        
        // if($validator->fails())
        //  {
        //     return response()->json([
        //         'status'=>420,
        //         'errors'=>$validator->messages(),
        //     ]);

        //  }
        //  else
        //  {

        //         $user = User::find($name);
        //         if($user)
        //         {

        //         $user->name=$request->input('name');
        //         $user->email=$request->input('email');
        //         $user->password=$request->input('password');
        //         $user->title=$request->input('title');
        //         $user->address=$request->input('address');
        //         $user->country=$request->input('country');
        //         $user->save();

        //         return response()->json([
        //             'status'=>200,
        //             'message'=>'Profile Update Successfully',
        //         ]);
        //     }

        //     else
        //     {
        //         return response()->json([
        //             'status'=>404,
        //             'message'=>'profile Id Not Found ',
        //         ]);

        //     }

        // }     


    }
}
