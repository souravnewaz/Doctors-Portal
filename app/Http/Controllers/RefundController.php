<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function index(){
        return view('admin.refunds');
    }
    public function view($id){
        return view('admin.refund');
    }
}
