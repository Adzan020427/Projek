<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\UserController;
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
Route::get('/register',[regis::class,'tampil_regis'])->name('regis');
Route::post('/register',[regis::class,'regis'])->name('kirim_data');

//pengaduan
Route::get('/pengaduan',[SampahController::class, 'tampil_pengaduan'])->name('pengaduan');
Route::post('/pengaduan',[SampahController::class, 'pengaduan'])->name('kirim_pengaduan');

//petugas
Route::get('/petugas',[PetugasController::class, 'tampil_petugas'])->name('petugas');
Route::post('/petugas/{id}/tindakan',[PetugasController::class, 'tindak_lanjut'])->name('tindak_lanjut');

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/user/{id}/update-role', [AdminController::class, 'updateRole'])->name('admin.user.updateRole');
Route::delete('/admin/user/{id}', [AdminController::class, 'destroyUser'])->name('admin.user.destroy');
// Route::get('/admin/petugas', [PetugasController::class, 'index'])->name('admin.petugas.index');
Route::post('/admin/petugas', [PetugasController::class, 'store'])->name('admin.petugas.store');
Route::get('/admin/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('admin.petugas.edit');
Route::put('/admin/petugas/{id}', [PetugasController::class, 'update'])->name('admin.petugas.update');
Route::delete('/admin/petugas/{id}', [PetugasController::class, 'destroy'])->name('admin.petugas.destroy');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
Route::post('/user/pengaduan', [UserController::class, 'kirimPengaduan'])->name('user.pengaduan.kirim');

