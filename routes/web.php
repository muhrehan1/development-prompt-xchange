<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\backend\BackendController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\LikeController;

// Route::get('/', function () {return view('home');});
Route::get('/', [FrontController::class, 'home'])->name('prompt.home');
Route::get('/about-us',[FrontController::class,'about'])->name('prompt.about');
Route::get('/contact-us',[FrontController::class,'contactus'])->name('prompt.contact');
Route::get('/pricing',[FrontController::class,'pricing'])->name('prompt.pricing');
Route::get('/blogs',[FrontController::class,'blogs'])->name('prompt.blogs');;
Route::get('/blog/{slug}',[FrontController::class,'blogs_details'])->name('prompt.blogs_details');

Route::get('/discover',[FrontController::class,'discover'])->name('prompt.explore');
Route::get('/hire',[FrontController::class,'hire'])->name('prompt.hire');
Route::get('/creator/{slug}', [FrontController::class, 'creator_single'])->name('prompt.profile');
Route::get('/generate/{id}', [FrontController::class, 'generation_single'])->name('prompt.generation_single');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');
    Route::get('/subcsription-create',[BackendController::class,'create_subscription'])->name('subscription.create');
    Route::get('/subcsription-lists',[BackendController::class,'list_subscription'])->name('subscription.lists');
    Route::get('/get-subs', [BackendController::class, 'get_subs'])->name('subscriptions.index');
    Route::post('/prices', [BackendController::class, 'store_subscription'])->name('prices.store');
    Route::get('/edit-pricing/{id}', [BackendController::class, 'edit'])->name('edit.pricing');
    Route::put('/prices/{id}', [BackendController::class, 'update_subscription'])->name('prices.update');
    Route::delete('/prices/{id}', [BackendController::class, 'destroy_subscription'])->name('prices.destroy');
    Route::get('/profile-update' ,[BackendController::class,'profile_update'])->name('profile_update');
    Route::post('/update-profile', [BackendController::class, 'updateProfile'])->name('update_profile');
    Route::post('/update-profile', [BackendController::class, 'updateProfile'])->name('update_profile');
    Route::get('/prompts', [BackendController::class, 'my_prompts'])->name('user.prompts');
    Route::get('/chat',[BackendController::class , 'chatUser'])->name('chat_user');

    Route::get('/admin-blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/get-blogs', [BlogController::class, 'get_blogs'])->name('blogs.get');
    Route::get('/admin-create-blog',[BlogController::class,'create_blogs'])->name('create_blogs');
    Route::post('/admin-blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/admin-blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('/admin-blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    Route::get('/admin-categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/get-categories', [CategoryController::class, 'get_categories'])->name('categories');
    Route::post('/admin-categories/store', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


});

Route::middleware(['auth', 'role:general_user'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');;
});

Route::middleware(['auth', 'role:content_creator'])->group(function () {
    Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
    Route::get('/create',[FrontController::class,'create'])->name('prompt.create');;
    Route::post('/test-api',[BackendController::class,'testApi'])->name('generate.image');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/profile-likes',[LikeController::class,'add_remove_like'])->name('profile.like');
});

Route::post('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Auth::routes();


