<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users');
    }

    public function view($id){
        return view('admin.user');
    }
}
