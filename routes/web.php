<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layouts.home');
});
//redirect User dashboard
Route::get('user/dashboard', static function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

//admin dashboard redirect and ensure user email verified
Route::get('admin/dashboard', static function () {
    return view('backend.admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin product controller
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');

require __DIR__ . '/auth.php';
