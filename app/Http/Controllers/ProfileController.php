<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Auth::user();
        return view('admin.pages.auth.profile',compact('profile'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name_surname'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:3',

        ]);
        $profile = Auth::user();
        $profile->name_surname = $request->name_surname;
        $profile->email        = $request->email;
        $profile->password     = Hash::make($request->password);
        $profile->save();
        return redirect()->route('dashboard.profile.get')->with('success', 'Profil Məlumatları Yeniləndi');
    }
}
