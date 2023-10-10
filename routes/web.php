<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\HomeimgController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\OurgradController;
use App\Http\Controllers\Admin\StaticController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Homeimg;
use App\Models\LogoModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TranslateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StaticPageController;


Route::group(['prefix'=>'/dashboard','as'=>'dashboard.','middleware' => ['notLogin','admin-language']],function()
{
    Route::get('/lang/{lang}',[HomeController::class,'lang'])->name('lang');
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::group(['prefix'=>'profile','as'=>'profile.'],function()
        {
            Route::get('/',[ProfileController::class,'edit'])->name('get');
            Route::post('/',[ProfileController::class,'update'])->name('post');
        });
//    Route::group(['prefix'=>'category','as'=>'category.'],function (){
//        Route::get('/setstatus/{id}',[CategoryController::class,'setStatus'])->name('setstatus');
//        Route::get('/',[CategoryController::class,'index'])->name('index');
//        Route::get('/create',[CategoryController::class,'create'])->name('create');
//        Route::post('/store',[CategoryController::class,'store'])->name('store');
//        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
//        Route::post('/update/{id}',[CategoryController::class,'update'])->name('update');
//        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete');
//    });
//    Route::group(['prefix'=>'post','as'=>'post.'],function (){
//        Route::get('/setstatus/{id}',[PostController::class,'setStatus'])->name('setstatus');
//        Route::get('/setShowHomePage/{id}',[PostController::class,'setShowHomePage'])->name('setShowHomePage');
//        Route::get('/',[PostController::class,'index'])->name('index');
//        Route::get('/create',[PostController::class,'create'])->name('create');
//        Route::post('/store',[PostController::class,'store'])->name('store');
//        Route::get('/edit/{id}',[PostController::class,'edit'])->name('edit');
//        Route::get('/deleted_post',[PostController::class,'deleted_post'])->name('deleted_post');
//        Route::post('/update/{id}',[PostController::class,'update'])->name('update');
//        Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete');
//        Route::get('/galery/{id}',[PostController::class,'galeryGet'])->name('galeryGet');
//        Route::post('/galery/{id}',[PostController::class,'galeryPost'])->name('galeryPost');
//        Route::get('/galeryDelete/{id}',[PostController::class,'galeryDelete'])->name('galeryDelete');
//        Route::get('/category-post/{id}',[PostController::class,'postCategory'])->name('postCategory');
//        Route::get('/restore/{id}',[PostController::class,'restore'])->name('restore');
//    });
//    Route::group(['prefix'=>'page','as'=>'page.'],function (){
//        Route::get('/setstatus/{id}',[StaticPageController::class,'setStatus'])->name('setstatus');
//        Route::get('/',[StaticPageController::class,'index'])->name('index');
//        Route::get('/create',[StaticPageController::class,'create'])->name('create');
//        Route::post('/store',[StaticPageController::class,'store'])->name('store');
//        Route::get('/edit/{id}',[StaticPageController::class,'edit'])->name('edit');
//        Route::post('/update/{id}',[StaticPageController::class,'update'])->name('update');
//        Route::get('/delete/{id}',[StaticPageController::class,'delete'])->name('delete');
//    });
//    Route::group(['prefix'=>'menu','as'=>'menu.'],function (){
//        Route::get('/setstatus/{id}',[MenuController::class,'setStatus'])->name('setstatus');
//        Route::get('/',[MenuController::class,'index'])->name('index');
//        Route::get('/create',[MenuController::class,'create'])->name('create');
//        Route::post('/store',[MenuController::class,'store'])->name('store');
//        Route::get('/edit/{id}',[MenuController::class,'edit'])->name('edit');
//        Route::post('/update/{id}',[MenuController::class,'update'])->name('update');
//        Route::get('/delete/{id}',[MenuController::class,'delete'])->name('delete');
//    });
    Route::group(['prefix'=>'setting','as'=>'setting.'],function (){
        Route::get('/',[SettingController::class,'index'])->name('index');
        Route::get('/create',[SettingController::class,'create'])->name('create');
        Route::post('/store',[SettingController::class,'store'])->name('store');
        Route::get('/edit/{id}',[SettingController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[SettingController::class,'update'])->name('update');
        Route::get('/delete/{id}',[SettingController::class,'delete'])->name('delete');
    });
//    Route::group(['prefix'=>'translate','as'=>'translate.'],function (){
//        Route::get('/',[TranslateController::class,'index'])->name('index');
//        Route::get('/create',[TranslateController::class,'create'])->name('create');
//        Route::post('/store',[TranslateController::class,'store'])->name('store');
//        Route::get('/edit/{id}',[TranslateController::class,'edit'])->name('edit');
//        Route::post('/update/{id}',[TranslateController::class,'update'])->name('update');
//        Route::get('/delete/{id}',[TranslateController::class,'delete'])->name('delete');
//    });
    Route::group(['prefix'=>'user','as'=>'user.'],function (){
        Route::get('/setstatus/{id}',[UserController::class,'setStatus'])->name('setstatus');
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/create',[UserController::class,'create'])->name('create');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[UserController::class,'update'])->name('update');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
    });
    Route::group(['prefix'=>'contact','as'=>'contact.'],function (){
        Route::get('/',[ContactController::class,'index'])->name('index');
        Route::get('/view/{id}',[ContactController::class,'view'])->name('view');
        Route::get('/delete/{id}',[ContactController::class,'delete'])->name('delete');
    });
    Route::group(['prefix'=>'subscribe','as'=>'subscribe.'],function (){
        Route::get('/',[SubscribeController::class,'index'])->name('index');
        Route::get('/view/{id}',[SubscribeController::class,'view'])->name('view');
        Route::get('/delete/{id}',[SubscribeController::class,'delete'])->name('delete');
    });
});
Route::group(['prefix'=>'/admin','as'=>'admin.','middleware'=>'isLogin'],function()
{
    Route::get('/',[AuthController::class,'index'])->name('get');
    Route::post('/',[AuthController::class,'Authcheck'])->name('post');
});
Route::group(['as'=>'front.','middleware'=>'front-language'],function()
{
    Route::get('/',[FrontController::class,'index'])->name('index');
    Route::get('/sitemap.xml',function(){
     return  response()->view('front.pages.sitemap')->header('Content-Type', 'text/xml');
    });
    Route::get('/aboutUs',[FrontController::class,'aboutUs'])->name('aboutUs');
    Route::get('/blog',[FrontController::class,'blog'])->name('blog');
    Route::get('/communities',[FrontController::class,'communities'])->name('communities');
    Route::get('/contact',[FrontController::class,'contact'])->name('contact');
    Route::get('/courses',[FrontController::class,'courses'])->name('courses');
    Route::get('/digitalMarketing',[FrontController::class,'digitalMarketing'])->name('digitalMarketing');
    Route::get('/faq',[FrontController::class,'faq'])->name('faq');
    Route::get('/hireOfGuards',[FrontController::class,'hireOfGuards'])->name('hireOfGuards');
    Route::get('/howework',[FrontController::class,'howework'])->name('howework');
    Route::get('/learningCenter',[FrontController::class,'learningCenter'])->name('learningCenter');
    Route::get('/outcomes',[FrontController::class,'outcomes'])->name('outcomes');
    Route::get('/programming',[FrontController::class,'programming'])->name('programming');
    Route::get('/webinars',[FrontController::class,'webinars'])->name('webinars');
    Route::get('/payment-policy',[FrontController::class,'policy'])->name('policy');
    Route::group(['as'=>'mail.'],function(){
        Route::post('/program-post',[MailController::class,'programPost'])->name('programPost');
        Route::post('/subscribeFirst',[MailController::class,'subscribeFirst'])->name('subscribeFirst');
        Route::post('/subscribeFooter',[MailController::class,'subscribeFooter'])->name('subscribeFooter');
        Route::post('/trialLessons',[MailController::class,'trialLessons'])->name('trialLessons');
        Route::post('/programMailPost',[MailController::class,'programMailPost'])->name('programMailPost');
        Route::post('/contactMain',[MailController::class,'contactMain'])->name('contactMain');
        Route::post('/programMailSubscribe',[MailController::class,'programMailSubscribe'])->name('programMailSubscribe');
        Route::post('/customMailSubscribe',[MailController::class,'customMailSubscribe'])->name('customMailSubscribe');
    });
});

Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('static',StaticController::class)->except(['show']);
    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');
});
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('logo',LogoController::class)->except(['show']);
    Route::get('logo/status/{id}',[LogoController::class,'status'])->name('status-logo');
});
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('homeimg',HomeimgController::class)->except(['show']);
    Route::get('homeimg/status/{id}',[HomeimgController::class,'status'])->name('status-homeimg');
});
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('ourgrad',OurgradController::class)->except(['show']);
    Route::get('ourgrad/status/{id}',[OurgradController::class,'status'])->name('status-ourgrad');
});
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::resource('courses',CoursesController::class)->except(['show']);
    Route::get('courses/status/{id}',[CoursesController::class,'status'])->name('status-courses');
});
Route::get('/', function (){
   $logos=LogoModel::All();
   $homeimgs=Homeimg::All();
    return view('front.pages.index',compact('logos', 'homeimgs'));
})->name('show.home');

