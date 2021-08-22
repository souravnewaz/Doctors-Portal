<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $appointment_id = request('id');
        $review = Review::where('appointment_id', $appointment_id)->first();
        return view('user.reviewCreate', compact('review'));
    }

    public function create(Request $request){
        $validator = $request->validate([
            'comment' => 'required',
        ]);
        $appointment_id = request('id');
        $appointment = Appointment::find($appointment_id);
        $doctor = $appointment->doctor;
        $user = $appointment->user;

        $review = new Review;
        $review->appointment_id = $appointment_id;
        $review->doctor_name = $doctor;
        $review->created_by = $user;
        $review->comment = $validator['comment'];
        $review->save();

        return redirect("/appointments")->with('success', 'Feedback Submitted');        
        

    }
}
