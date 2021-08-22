<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::get();
        //dd($departments);
        return view('user.departments')->with('departments', $departments);
    }
}
