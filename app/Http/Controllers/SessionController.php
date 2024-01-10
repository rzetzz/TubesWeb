<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
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

    function register()
    {
        return view('auth/register');
    }

    function create(request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ],[
            'name.required'=>'Nama harus di isi',
            'email.required'=>'Email harus di isi',
            'email.email'=>'Email tidak valid',
            'password.required'=>'Password harus di isi',
        ]);

       $data =[
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
       ];

       User::create($data);

       return redirect('/sesi')->with('success', 'User berhasil dibuat!');
    }
}
