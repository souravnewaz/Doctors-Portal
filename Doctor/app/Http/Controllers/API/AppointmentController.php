<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AppointmentController extends Controller
{
    public function viewappointment()
    {
        $appointment = Appointment::all();
        return response()->json([
            'status'=>200,
            'appointment'=>$appointment,

        ]);


    }

    public function deleteappointment($id)
    {
        $appointment = Appointment::find($id);
        if($appointment)
        {
            $appointment->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Appointment Reject  Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Appointment Id Not Found ',
            ]);

        }

    }

   
}
