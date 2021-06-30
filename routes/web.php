<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PostsController::class, 'index']);

Route::get('/posts',[PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/edit/{post}',[PostsController::class, 'edit'])->name('posts.edit');
Route::get('/posts/destroy/{post}',[PostsController::class, 'destroy'])->name('posts.destroy');
Route::put('/posts/{post}',[PostsController::class, 'update'])->name('posts.update');
Route::get('/posts/create',[PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store',[PostsController::class, 'store'])->name('posts.store');
