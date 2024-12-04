<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserpageController;
use App\Http\Controllers\AdminController;
use Flasher\Laravel\Facade\Flasher;

// Route::get('/', function () {
//     return view('home.index');
// });
route::get('/',[UserpageController::class,'index']);
route::get('/register',[UserpageController::class,'home']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



route::get('admin/dashboard',[UserpageController::class,'index'])-> middleware(['auth','admin']);

route::get('view_category',[AdminController::class,'view_category'])-> middleware(['auth','admin']);

route::post('add_category',[AdminController::class,'add_category'])-> middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> middleware(['auth','admin']);

route::get('edit_category/{id}',[AdminController::class,'edit_category'])-> middleware(['auth','admin']);

route::post('update_category/{id}',[AdminController::class,'update_category'])-> middleware(['auth','admin']);

route::get('add_product',[AdminController::class,'add_product'])-> middleware(['auth','admin']);

route::post('upload_product',[AdminController::class,'upload_product'])-> middleware(['auth','admin']);

route::get('view_product',[AdminController::class,'view_product'])-> middleware(['auth','admin']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\UserpageController::class, 'index'])->name('home');


Route::get('/logout', function(){
    return view('welcome');
});
use App\Http\Controllers\PostsController;
// Route::get('/posts', [App\Http\Controllers\PostsController::class, 'posts'])->middleware(['auth', 'admin']);
Route::resource('/posts', PostsController::class)-> middleware(['auth','admin']);
use App\Http\Controllers;
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
// Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update');
// Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
// route::get('posts',[PostsController::class,'posts'])->middleware(['auth','admin']);
// flasher test
// Route::get('/test-notification', function () {
//     Flasher::addSuccess('This is a test notification');
//     return view('welcome');  // Or another view to test
// });
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
// Route::get('/email/verify{id}/{hash}',function (EmailVerificationRequest $request){
//     $request->fulfill();
//     return redirect('/home');
// })->middlware(['auth', 'signed'])->name('verification.verify');

// use Illuminate\Http\Request;
// Route::post('/email/verification-notefication', function (Request $request){
//     $request->user()->sendEmailVerificationNotification();
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth','throttle:6,1'])->name();
// Auth::request();

// Admin Route
// Admin Route
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');

// User Routes
Route::get('/userpage', [UserpageController::class, 'index'])->name('userpage.index');
Route::get('/user/dashboard', [UserpageController::class, 'dashboard'])->name('userpage.dashboard');

// Product Routes (Resource Route for CRUD operations)
Route::resource('products', ProductController::class); // This will handle all product actions (index, create, store, edit, update, destroy)
Route::resource('userpage', UserpageController::class);
// Route::get('/product', [UserpageController::class, 'show'])->name('userpage.show');
// Route::get('/product/{id}', [UserpageController::class, 'show'])->name('userpage.show');

Route::get('/userpage/products', [UserpageController::class, 'show'])->name('userpage.show');