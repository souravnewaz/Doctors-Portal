<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::get();
        return view('admin.appointments', compact('appointments'));
    }

    public function create(Request $request){
        $date = $request->get('date');
        
        //getting doctor info
        $doctor_id = request('id');
        $doctor =  DB::table('doctors')->find($doctor_id);
        $doctor_name = $doctor->full_name;

        
        //getting user info
        $user_email = $request->session()->get('user');
        $patient = DB::table('patients')->where('email', $user_email)->first();
        $patient_name = $patient->full_name;
        
        
        //storing information
        $appointment = new Appointment;
        $appointment->doctor = $doctor_name;
        $appointment->user = $patient_name;
        $appointment->date = $date;
        $appointment->save();

        return redirect("/appointments")->with('success', 'Appointments created successfully');
    }

    public function createApi(Request $request){
        $date = $request->input('date');
        $doctor = $request->input('doctor');
        $user = $request->input('user');
        
        
        
        
        //storing information
        $appointment = new Appointment;
        $appointment->doctor = $doctor;
        $appointment->user = $user;
        $appointment->date = $date;
        $appointment->save();

        return $appointment;
    }

    

    public function myAppointments(Request $request){
        $user_email = $request->session()->get('user');
        $user = DB::table('patients')->where('email', $user_email)->first();
        $full_name = $user->full_name;

        $appointments = Appointment::where('user', $full_name)->where('status', '!=', 'completed')->get();
        $appointments_completed = Appointment::where('user', $full_name)->where('status', '=', 'completed')->get();
        

        return view('user.appointments', compact('appointments', 'appointments_completed'));
    }

    public function view($id){
        return view('admin.appointment');
    }
}
