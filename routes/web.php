<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\regis;

Route::get('/', [SampahController::class, 'awal'])->name('awal');
Route::get('/home', [SampahController::class, 'index'])->name('home');
Route::get('/blog', [SampahController::class, 'blog'])->name('blog');
Route::get('/blog_detail', [SampahController::class, 'blog_detail'])->name('blog_detail');
Route::get('/portofolio', [SampahController::class, 'portofolio_details'])->name('portofolio');
Route::get('/service_details', [SampahController::class, 'service_details'])->name('service_Details');
Route::get('/starter_page', [SampahController::class, 'starter_page'])->name('starter_page');

//login
Route::get('/login',[SampahController::class,'tampil_login'])->name('login');
Route::post('/login',[SampahController::class,'login'])->name('kirimdata');
Route::post('/logout',[SampahController::class,'logout'])->name('logout');

//regis
Route::get('/regis',[regis::class,'tampil_regis'])->name('regis');
Route::post('/regis',[regis::class,'regis'])->name('kirim');

//pengaduan
Route::get('/pengaduan',[SampahController::class, 'tampil_pengaduan'])->name('pengaduan');
Route::post('/pengaduan',[SampahController::class, 'pengaduan'])->name('kirim_pengaduan');

//admin
Route::get('/admin', function(){
    return view('admin.index_admin');
});
// Route::get('/pengaduan', function () {
//     return view('pengaduan.form_pengaduan');
// });
