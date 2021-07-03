<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::get();
        
        if(session('user_type') == 'admin'){
            return view('admin.doctors')->with('doctors', $doctors);
        } else{
            return view('user.doctors')->with('doctors', $doctors);
        }

        
    }

    public function view(){
        $id = request('id');
        $doctor = Doctor::where('id', $id)->get();
        
        if(session('user_type') == 'admin'){
            return view('admin.doctor')->with('doctor', $doctor);
        } else{
            return view('user.doctor')->with('doctor', $doctor);
        }
    }
}

