<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('admin.notifications');
    }
    public function view($id){
        return view('admin.notification');
    }
}
