<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.pages.account.index',compact('users'));
    }
    public function create()
    {
        return view('admin.pages.account.user_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_surname' => 'required|min:3',
            'email' => 'email|unique:users,email',
            'password' => 'required|min:3',
            'repassword' =>'required|min:3',
            // 'role' => 'required',
        ]);
        $user = new User();
        $user->name_surname = $request->input('name_surname');
        $user->email = $request->input('email');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->password = Hash::make($request->password);
        // $user->syncRoles($request->role);
        if($request->input('repassword')!=$request->input('password'))
        {
            return redirect()->back()->with('danger','Şifrələr eyni deyil');
        }
        $user->save();
        return redirect()->route('dashboard.user.index')->with('success','Yeni istifadəçi yaradıldı');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.pages.account.user_edit',compact('user'));
    }
    public function update($id,Request $request)
    {
        $request->validate([
            'name_surname' => 'required|min:3',
            'email' => 'email',
            'password' => 'required|min:3',
            'repassword' =>'required|min:3',
            // 'role' => 'required',
        ]);
        $user = User::find($id);
        $user->name_surname = $request->input('name_surname');
        $user->email = $request->input('email');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
        $user->password = Hash::make($request->password);
        // $user->syncRoles($request->role);
        if($request->input('repassword')!=$request->input('password'))
        {
            return redirect()->back()->with('danger','Şifrələr eyni deyil');
        }
        $user->save();
        return redirect()->route('dashboard.user.index')->with('success','Dəyişikliklər yadda saxlanıldı');
    }
    public function delete($id)
    {
        $user = User::find($id);
        if($user->id == 1)
        {
            return redirect()->back()->with('danger','Əsas İstifadəçi silinə bilməz');
        }
        $user->delete();
        return redirect()->route('dashboard.user.index')->with('danger','İstifadəçi silindi');
    }
    public function setStatus($id)
    {
        $user   = User::find($id);
        if($user->id ==1 )
        {
            return redirect()->back()->with('danger','Əsas İstifadəçinin Statusu Dəyişdirilə Bilməz');
        }
        $user->update(['status'=>$user->status ? 0 : 1]);
        return redirect()->route('dashboard.user.index')->with('success','Status Dəyişdirildi');
    }
}
