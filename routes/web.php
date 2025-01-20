<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/',[HomeController::class,'home'])->name('home');
route::get('admin/dashboard',[HomeController::class,'index'])->name('admin_dashboard');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/post',[HomeController::class,'post'])->name('post');
route::get('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/account',[HomeController::class,'account'])->name('account');
route::get('/profile',[HomeController::class,'profile'])->name('profile');
route::get('/newblog',[HomeController::class,'newblog'])->name('newblog');
route::get('/comment',[HomeController::class,'comment'])->name('comment');






Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
