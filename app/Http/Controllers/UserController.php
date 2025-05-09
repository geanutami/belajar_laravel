<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>"Email wajib diisi",
            'password.required'=>"Password wajib diisi",
        ]);

        $validasilogin = [
            'email'=> $request->email,
            'password'=> $request->password

        ];
        if(Auth::attempt($validasilogin)){
            echo "success login";exit();
         } else
         return redirect('')->withErrors('Username dan password yang Anda masukkan tidak sesuai.')->withInput();

        }
    }

