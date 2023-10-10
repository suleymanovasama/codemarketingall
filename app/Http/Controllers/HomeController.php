<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\StaticModel;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
   public function index()
   {
    $users = User::get();
    $statics=StaticModel::get();

    return view('admin.pages.index',compact('users','statics'));
   }
   public function lang($lang)
   {
    if (in_array($lang, config('app.available_locale'))) {
        session()->put('locale', $lang);
        app()->setLocale(session()->get('locale'));
    } else {
        session()->put('locale', App::getLocale());
        app()->setLocale(session()->get('locale'));
    }
    return redirect()->back();
    }
}
