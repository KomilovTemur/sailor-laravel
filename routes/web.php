<?php

use App\Http\Controllers\admin\CategoriesContoller;
use App\Http\Controllers\admin\LessionsController;
use App\Http\Controllers\admin\PostContoller;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/pricing', [SiteController::class, 'pricing'])->name('pricing');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/add', function () {
    return view('admin.add');
})->middleware(['auth', 'verified'])->name('dashboard.add');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name("admin.")->middleware('auth', 'checkadmin')->group(function () {
    Route::resource('users', UsersController::class);
    Route::resource('phones', PhonesController::class);
    Route::resource('posts', PostContoller::class);
    Route::resource('categories', CategoriesContoller::class);
    Route::resource('service', ServiceController::class);
    Route::resource('lessons', LessionsController::class);
})->name('admin.');

Route::get('/lang/{lang}', function ($lang) {
    if (!in_array($lang, ['en', 'uz', 'ru'])) {
        abort(400);
    }
    session()->put('lang', $lang);
    return redirect()->back();
})->name('lang');

require __DIR__ . '/auth.php';
