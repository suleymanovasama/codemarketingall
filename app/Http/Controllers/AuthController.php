<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.pages.auth.index');
    }
    public function Authcheck(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:50',
            'password'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>1]))
        {
            return redirect()->back()->with('danger','Daxil edilən məlumatlar yanlışdır');
        }
         return redirect()->route('dashboard.index')->with('success','Giriş uğurlu oldu');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.get');
    }

}
