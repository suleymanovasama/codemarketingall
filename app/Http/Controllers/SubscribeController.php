<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribe = Subscribe::get();
        return view('admin.pages.subscribe.index',compact('subscribe'));
    }
    public function view($id){
        $subscribe = Subscribe::find($id);
        return view('admin.pages.subscribe.view',compact('subscribe'));
    }
    public function delete($id){
        $subscribe = Subscribe::find($id);
        $subscribe->delete();
        return redirect()->back()->with('danger','Abunə Silindi');
    }
}
