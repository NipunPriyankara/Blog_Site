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
        return view('home.home');
    }

    public function about()
    {
        return view('about.about');
    }

    public function post()
    {
        return view('post.post');
    }

    public function contact()
    {
        return view('contact.contact');
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
