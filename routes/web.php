<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\NewsController;

// Route trang chủ
Route::get('/', function () {
    return view('home');
}); 

// Routes cho xác thực
Auth::routes(); // Tạo các route cho đăng nhập, đăng ký, quên mật khẩu, etc.

// Route để chuyển hướng sau khi đăng nhập
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route đăng xuất
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes cho quản trị
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('news-categories', NewsCategoryController::class);
    Route::resource('news', NewsController::class);
});
