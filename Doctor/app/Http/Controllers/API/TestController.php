<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    
    
    public function edittest($id)
    {
        // dd($uname);
        $user = User::where('name', $id)->get();

        if($user)
        {
            return response()->json([
                'status'=>200,
                'user'=>$user,
            ]);

            // return $user;

        }

        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'user Id Not Found ',
            ]);

        }

        // $user = User::where('name', $id)->get();
        // $user= User::find($uname);
        // $user = User::where('id', $id)->get();
        // return response()->json([
        //     'status'=>200,
        //     'user'=>$user,

        // ]);

        return $user;

    

    }

    public function updatetest(Request $request)
    {
        $validator= Validator::make($request->all(), [

            
             'name'=>'required|min:3|max:15',
             'email'=>'required',
            //  'password'=>'required|min:4|max:8',
             'title'=>'required',
             'address'=>'required',
             'country'=>'required',

            
        ]);
        
        if($validator->fails())
         {
            return response()->json([
                'status'=>420,
                'errors'=>$validator->messages(),
            ]);

         }
         else
         {

                $user = User::find($request->id);
                // $user = User::where('name', $id)->put();
                if($user)
                {

                            $user->name=$request->name;
                            $user->email=$request->email;
                            // $user->password=$request->input('password');
                            $user->title=$request->title;
                            $user->address=$request->address;
                            $user->country=$request->country;
                            $user->save();

                return response()->json([
                    'status'=>200,
                    'message'=>'user Update Successfully',
                ]);
            }

            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'user Id Not Found ',
                ]);

            }

        }
        
        


    }

    public function deleteuser($id)
    {
        $user = user::find($id);
        if($user)
        {
            $user->delete();
            return response()->json([
                'status'=>200,
                'message'=>'user Deleted Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'user Id Not Found ',
            ]);

        }

    }



    public function createuser(Request $request)
    {
        $validator= Validator::make($request->all(), [

            'title'=>'required|max:191',
            'date'=>'required',
            'description'=>'required|max:1000',

            
        ]);
        
        if($validator->fails())
         {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);

         }
         else
         {

                $user = new user;

                $user->title=$request->input('title');
                $user->date=$request->input('date');
                $user->description=$request->input('description');
                $user->save();

                return response()->json([
                    'status'=>200,
                    'message'=>'user Create Successfully',
                ]);

        }


    }
}
