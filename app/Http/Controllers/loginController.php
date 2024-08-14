<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function addNewUser(Request $request) {
        $request->validate([
            'name'=>'required | min:3 | max:10 | Uppercase',
            'email'=>'required | email',
            'skill'=>'required',
            'gender'=>'required',
            'city'=>'required',
        ]);
        return view('display-user-data', ['result'=>$request]);        

    }
}
