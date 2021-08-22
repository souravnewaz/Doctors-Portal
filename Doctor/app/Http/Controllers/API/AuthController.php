<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
         $validator= Validator::make($request->all(), [
             'name'=>'required|min:3|max:15',
             'email'=>'required|email|max:191|unique:users,email',
             'password'=>'required|min:4|max:8',
             'title'=>'required',
             'address'=>'required',
             'country'=>'required',
         ]);

         if($validator->fails())
         {
             return response()->json([
                 'validation_errors'=>$validator->messages(),
             ]);

         }
         else
         {

            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'title'=>$request->title,
                'address'=>$request->address,
                'country'=>$request->country,
            ]);

             $token = $user->createToken($user->email. '_Token')->plainTextToken;
             return response()->json([
                 'status'=>200,
                 'username'=>$user->name,
                 'token'=>$token,
                 'message'=>'SignUp Successfully'
             ]);
         }
    }

    public function login(Request $request)
    {
        $validator= Validator::make($request->all(), [

            'email'=>'required|max:191',
            'password'=>'required|min:4|max:8',
            
        ]);

        if($validator->fails())
         {
             return response()->json([
                 'validation_errors'=>$validator->messages(),
             ]);

         }
         else
         {

            $user = User::where('email', $request->email)->first();
            if (! $user || ! Hash::check($request->password, $user->password)) {

                return response()->json([
                    'status'=>401,
                    'message'=>'Invalid Credentials',
                ]);
           }
            else
            {
                $token = $user->createToken($user->email. '_Token')->plainTextToken;
                 return response()->json([
                 'status'=>200,
                 'username'=>$user->name,
                 'token'=>$token,
                 'message'=>'Login Successfully'
             ]);

            }
            
      }

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Logout Successfully',
        ]);
    }
}
