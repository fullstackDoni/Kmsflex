<?php

use App\Http\Controllers\Moderator\CategoryiesController;
use App\Http\Controllers\Moderator\CommentsController;
use App\Http\Controllers\Moderator\GenreiesController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Moderator\UsersController;
use App\Http\Controllers\Moderator\VideolarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\VideosController;

Route::get('/config',[ConfigController::class,'index']);

Route::middleware('auth')->group(function (){
    Route::get('/',function (){
        return redirect()->route('video.index');
    });
    Route::resource('video',VideoController::class)->except('index','show');
    Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('test',[AboutusController::class,'test'])->name('test');
    Route::get('bilmim',[AboutusController::class,'bilmim'])->name('bilmim');

    Route::middleware('hasrole:admin')->group(function (){
        Route::get('/admin/users',[UserController::class,'index'])->name('admin.users.index');
        Route::get('/admin/users/search',[UserController::class,'index'])->name('admin.users.search');
        Route::get('/admin/users/{user}/edit',[UserController::class,'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{user}',[UserController::class,'edit'])->name('admin.users.update');
        Route::put('/admin/users/{user}/ban',[UserController::class,'ban'])->name('admin.users.ban');
        Route::put('/admin/users/{user}/unban',[UserController::class,'unban'])->name('admin.users.unban');

        Route::get('/admin/categories',[CategoriesController::class,'index'])->name('admin.categories.index');
        Route::get('/admin/categories/{category}/edit',[CategoriesController::class,'edit'])->name('admin.categories.edit');
        Route::put('/admin/categories/{category}',[CategoriesController::class,'update'])->name('admin.categories.update');
        Route::delete('/admin/categories/delete/{category}',[CategoriesController::class,'destroy'])->name('admin.categories.destroy');
        Route::get('/admin/categories/create',[CategoriesController::class,'create'])->name('admin.categories.create');
        Route::post('/admin/categories/store',[CategoriesController::class,'store'])->name('admin.categories.store');


        Route::get('/admin/genres',[GenresController::class,'index'])->name('admin.genres.index');
        Route::get('/admin/genres/{genre}/edit',[GenresController::class,'edit'])->name('admin.genres.edit');
        Route::put('/admin/genres/{category}',[GenresController::class,'update'])->name('admin.genres.update');
        Route::delete('/admin/genres/delete/{genre}',[GenresController::class,'destroy'])->name('admin.genres.destroy');
        Route::get('/admin/genres/create',[GenresController::class,'create'])->name('admin.genres.create');
        Route::post('/admin/genres/store',[GenresController::class,'store'])->name('admin.genres.store');


        Route::get('/admin/videos',[VideosController::class,'index'])->name('admin.videos.index');
        Route::get('/admin/videos/{video}/edit',[VideosController::class,'edit'])->name('admin.videos.edit');
        Route::put('/admin/videos/{video}',[VideosController::class,'update'])->name('admin.videos.update');
        Route::delete('/admin/videos/delete/{video}',[VideosController::class,'destroy'])->name('admin.videos.destroy');
        Route::get('/admin/videos/create',[VideosController::class,'create'])->name('admin.videos.create');
        Route::post('/admin/videos/store',[VideosController::class,'store'])->name('admin.videos.store');






        Route::get('/admin/comments',[AdminController::class,'comments'])->name('admin.comments.index');
    });
    Route::middleware('hasrole:moderator')->group(function (){

        Route::get('/moderator/categories',[CategoryiesController::class,'index'])->name('moderator.categories.index');
        Route::get('/moderator/categories/store',[CategoryiesController::class,'create'])->name('moderator.categories.create');
        Route::post('/moderator/categories/create',[CategoryiesController::class,'store'])->name('moderator.categories.store');

        Route::get('/moderator/genres',[GenreiesController::class,'index'])->name('moderator.genres.index');
        Route::get('/moderator/genres/create',[GenreiesController::class,'create'])->name('moderator.genres.create');
        Route::post('/moderator/genres/store',[GenreiesController::class,'store'])->name('moderator.genres.store');

        Route::get('/moderator/videos',[VideolarController::class,'index'])->name('moderator.videos.index');
        Route::get('/moderator/videos/create',[VideolarController::class,'create'])->name('moderator.videos.create');
        Route::post('/moderator/videos/store',[VideolarController::class,'store'])->name('moderator.videos.store');

        Route::get('/moderator/comments',[CommentsController::class,'index'])->name('moderator.comments.index');
        Route::delete('/moderator/videos/delete/{comment}',[CommentsController::class,'destroy'])->name('moderator.comments.destroy');

    });
    Route::resource('comments',CommentController::class);
});
Route::resource('video',VideoController::class)->only('index','show');
Route::resource('category',CategoryController::class)->only('index','show');
Route::resource('genre',GenreController::class)->only('index','show');

Route::get('/video/category/{category}',[VideoController::class,'videoByCategory'])->name('video.category');
Route::get('/video/genre/{genre}',[VideoController::class,'videoByGenre'])->name('video.genre');
Route::get('/login',[LoginController::class,'create'])->name('login.form');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/register',[RegisterController::class,'create'])->name('register.form');
Route::post('/register',[RegisterController::class,'register'])->name('register');
