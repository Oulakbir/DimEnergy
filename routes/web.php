<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BotManController;
use App\Post;
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

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'], 'botman',[BotManController::class,'handle']);

Route::get('/dimenergydoc',[Controller::class,'dimenergydoc'])->name("dimenergydoc");
Route::get('/dimenergydoc2',[Controller::class,'dimenergydoc2'])->name("dimenergydoc2");
Route::get('/dimenergypv',[Controller::class,'dimenergypv'])->name("dimenergypv");
Route::get('/dimenergyeolien',[Controller::class,'dimenergyeolien'])->name("dimenergyeolien");
Route::get('/Aide',[Controller::class,'Aide'])->name("Aide");
Route::get('/evaluations', 'Controller@evaluation')->name('evaluations');
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::post('/commentaire', 'Controller@store')->name('comments.index');
Route::get('/statistiques', 'ChartController@index1')->name('statistiques');
Route::get('/posts/{post}/comments', function (Post $post) {
    return $post->comments;
});



Route::post('/posts/{post}/comments', function (Request $request, Post $post) {
    $comment = new \Laravelista\Comments\Comment;
    $comment->commenter()->associate(auth()->user());
    $comment->commentable()->associate($post);
    $comment->comment = $request->comment;
    $comment->approved = true;
    $comment->save();

    return $comment;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
