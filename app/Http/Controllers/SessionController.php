<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Validator;

class SessionController extends Controller
{
    function index()
    {
        return view("auth/index");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email harus di isi',
            'password.required'=>'Password harus di isi',
        ]);

       

        $infologin =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('Success','Berhasil Login');
        } else {
            return redirect('/sesi')->with('Gagal','Login Gagal');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/')->with('Succes', 'berhasil Logout');
    }
}
