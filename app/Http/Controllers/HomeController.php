<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{

    public function home()
    {
        $post = Post::all();
        return view('home.home',compact('post'));

    }

    public function about()
    {
        return view('about.about');
    }

    public function post()
    {$post = Post::all();
        return view('post.post',compact('post'));

    }

    public function contact()
    {

        return view('contact.contact');

    }

    public function account()
    {
        return view('profile.user');

    }

//////....................user.........................
public function profile()
    {
        $user = User::all();
        return view('user.userprofile',compact('user'));
    }
    public function updateuprofile()

    {
        $user = User::all();
        return view('profile.user',compact('user'));
    }

    public function uallpost()
    {
        $post = Post::all();
        return view('user.uallpost',compact('post'));
    }

    public function unewpost()
    {
        return view('user.unewpost');
    }

    public function ueditpost($id){

        $post=Post::find($id);
        return view('user.ueditpost' , compact('post'));
    }


}
