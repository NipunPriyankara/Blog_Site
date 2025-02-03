<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Post;
use App\Models\User;


Route::get('/dashboard', function () {
    $post = Post::all();
    return view('home.home', compact('post'));

})->middleware(['auth', 'verified'])->name('userprofile');
Route::get('/profile', function () {
    $post = Post::all();
    return view('user.userprofile',compact('post'));
})->middleware(['auth', 'verified'])->name('userprofile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//user
route::get('/',[HomeController::class,'home'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/post',[HomeController::class,'post'])->name('post');
route::get('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/account',[HomeController::class,'account'])->name('account');

route::get('/profile',[HomeController::class,'profile'])->name('profile');
route::get('/allpost',[HomeController::class,'uallpost'])->name('uallpost');
route::get('/newpost',[HomeController::class,'unewpost'])->name('unewpost');
route::get('/updateuprofile/{id}',[HomeController::class,'updateuprofile'])->name('updateuprofile');

route::get('/ueditpost/{id}',[HomeController::class,'ueditpost'])->name('ueditpost');


//admin
route::get('admin/dashboard',[AdminController::class,'admin'])->name('admin_dashboard');
route::get('admin/profile',[AdminController::class,'adminprofile'])->name('adminprofile');
route::get('admin/allpost',[AdminController::class,'allpost'])->name('allpost');
route::get('admin/newpost',[AdminController::class,'newpost'])->name('newpost');
route::post('admin/dashboard',[AdminController::class,'userdetail'])->name('userdetail');
route::get('/editpost/{id}',[AdminController::class,'editpost'])->name('editpost');
route::post('/addpost',[AdminController::class,'addpost'])->name('addpost');
route::get('/deletepost/{id}',[AdminController::class,'deletepost'])->name('deletepost');
route::post('/updatepost/{id}',[AdminController::class,'updatepost'])->name('updatepost');

route::get('/usertype/{id}',[AdminController::class,'usertype'])->name('usertype');
route::post('/updateusertype/{id}',[AdminController::class,'updateusertype'])->name('updateusertype');
route::get('/deleteuser/{id}',[AdminController::class,'deleteuser'])->name('deleteuser');
route::get('/updateprofile/{id}',[AdminController::class,'updateprofile'])->name('updateprofile');
route::post('/profileupdate/{id}',[AdminController::class,'profileupdate'])->name('profileupdate');







