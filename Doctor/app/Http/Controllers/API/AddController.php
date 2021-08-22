<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddController extends Controller
{
    public function add(Request $request)
    {

        $availability = new Availability;

                $availability->sunday=$request->input('sunday') == true ? '1':'0';
                $availability->monday=$request->input('monday') == true ? '1':'0';
                $availability->tuesday=$request->input('tuesday') == true ? '1':'0';
                $availability->wednesday=$request->input('wednesday') == true ? '1':'0';
                $availability->thursday=$request->input('thursday') == true ? '1':'0';
                $availability->friday=$request->input('friday') == true ? '1':'0';
                $availability->saturday=$request->input('saturday') == true ? '1':'0';     
                $availability->save();

            
         
    }

   
   
}
