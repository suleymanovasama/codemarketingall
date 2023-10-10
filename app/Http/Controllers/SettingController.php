<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::paginate(50);
        return view('admin.pages.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $urlCount = strlen(asset(''));
        $request->validate([
            'key' => 'required',
        ]);
        $setting =  new setting();
        $setting->title = htmlspecialchars($request->title);
        $setting->key = $request->key;
        $setting->save();
        return redirect()->route('dashboard.setting.index')->with('success','Yeni Parametr yaradıldı');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = setting::find($id);
        return view('admin.pages.setting.edit',compact('setting'));
    }
    public function update($id,Request $request)
    {
        $urlCount = strlen(asset(''));
        $request->validate([
            'key' => 'required',
        ]);
        $setting =  Setting::find($id);
        $setting->title = htmlspecialchars($request->title);
        $setting->key = $request->key;
        $setting->update();
        return redirect()->route('dashboard.setting.index')->with('success','Dəyişikliklər yadda saxlanıldı!');
    }
    public function delete($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return redirect()->route('dashboard.setting.index')->with('danger','Parametr silindi');
    }
}
