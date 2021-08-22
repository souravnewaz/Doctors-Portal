<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blogs');
    }

    public function view($id){
        return view('admin.blog');
    }
}
