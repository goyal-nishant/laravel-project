<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getName($name) {
        return view('home',['name'=>$name]);
    }

    function admin() {
        if(View::exists('admin.dashboard')) {
            return view('admin.dashboard');
        }else {
            return "No file found";
        }
        
    }
}
