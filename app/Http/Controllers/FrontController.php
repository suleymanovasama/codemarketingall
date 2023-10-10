<?php

namespace App\Http\Controllers;


use App\Models\LogoModel;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }
    public function aboutUs()
    {
        return view('front.pages.aboutUs');
    }
    public function blog()
    {
        return view('front.pages.blog');
    }
    public function communities()
    {
        return view('front.pages.communities');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }
    public function courses()
    {
        return view('front.pages.courses');
    }
    public function digitalMarketing()
    {
        return view('front.pages.digitalMarketing');
    }
    public function faq()
    {
        return view('front.pages.faq');
    }
    public function hireOfGuards()
    {
        return view('front.pages.hireOfGuards');
    }
    public function howework()
    {
        $logos=LogoModel::All();
        return view('front.pages.howework', compact('logos'));
    }
    public function learningCenter()
    {
        return view('front.pages.learning-center');
    }
    public function outcomes()
    {
        $logos=LogoModel::All();
        return view('front.pages.outcomes', compact('logos'));
    }
    public function programming()
    {
        return view('front.pages.programming');
    }
    public function webinars()
    {
        return view('front.pages.webinars');
    }
    public function policy()
    {
        return view('front.pages.policy');
    }
}
