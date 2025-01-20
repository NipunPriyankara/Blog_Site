<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function post()
    {
        return view('pages.post');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function account()
    {
        return view('profile.user');
        
    }

    public function profile()
    {

            return view('profile.profile');
        
    }

    public function newblog ()
    {
        return view('blog');
        
    }

    public function comment ()
    {
        return view('comment');
        
    }



}
