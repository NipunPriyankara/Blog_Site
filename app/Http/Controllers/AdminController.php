<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\support\Facades\Auth;


class AdminController extends Controller

//------admin Panel login---
{
    public function admin()

    {
        $user = User::all();
        return view('admin.index',compact('user'));
    }
//------admin Panel Profile login---
    public function adminprofile()

    {
        $user = User::all();
        return view('admin.adminprofile',compact('user'));
    }
//------admin Panel all post---
    public function allpost()

    {
        $post = Post::all();
        return view('admin.allpost',compact('post'));
    }

///////////////////////////////////////////////////////////
    public function newpost()

    {
        return view('admin.newpost');
    }

    public function addpost(Request $request)
    {
        $user=Auth()->user();
        //$name meannig post table name
        //other name meaning auth table name

        $usertype =$user->usertype;
        $id =$user->userid;
        $post=new Post;
        $post->title = $request->title;
        $post->description = $request->description ;
        $post->status = 'pending' ;
        $post->usertype =$user->usertype;
        $post->name =$user->name;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image=$imagename;
        $post->save();
        return redirect()->back()->with('message','Post Added Successfully');
    }

////////////////////////////////////////////////////////////////////////////////////
    public function deletepost($id)
        {
            $post=Post::find($id);
            $post->delete();
            return redirect()->back()->with('message','Post Delete Successfully');
        }
//////////////////////////////////////////////////////////////////////////////////////
        public function userdetail(Request $request)
    {
        $user=Auth()->user();
        $user->name = $request->id;
        $user->usertype = $request->usertype ;
        $user->address = $request->address ;
    }
///////////////////////////////////////////////////////////////////////////////////////
    public function editpost($id){

        $post=Post::find($id);
        return view('admin.editpost' , compact('post'));
    }

    public function updatepost(Request $request,$id){

        $data=Post::find($id);
        $data->title=$request->title;
        $data->status=$request->status;
        $data->description=$request->description;
        $image=$request->image;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message','Post Update Successfully');

    }
    ////////////////////////////////////////////////////////////////////////////////////
    public function usertype($id){

        $user=User::find($id);
        return view('admin.usertype' , compact('user'));
    }
    public function updateusertype(Request $request,$id){

        $data=User::find($id);
        $data->name=$request->name;
        $data->usertype=$request->usertype;
        $data->save();
        return redirect()->back()->with('message','Post Update Successfully');

}
    public function deleteuser($id){

            $user=User::find($id);
            $user->delete();
            return redirect()->back()->with('message','Post Delete Successfully');
        }

        public function updateprofile()

    {
        $user = User::all();
        return view('profile.profile',compact('user'));
    }

    public function profileupdate(Request $request,$id){

        $data=User::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->save();
        return redirect()->back()->with('message','Profile Update Successfully');

}

    }












