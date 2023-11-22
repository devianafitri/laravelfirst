<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\exController;
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

Route::get('/', function () {return view('home');});

Route::get('/auth/login', [LoginRegisterController::class,'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class,'register'])->name('auth.register');
Route::get('/ex/beritaKSI', [exController::class,'beritaKSI'])->name('ex.beritaKSI');
Route::get('/ex/profileDosen', [exController::class,'profileDosen'])->name('ex.profileDosen');
Route::get('/ex/profileKelulusanKSI', [exController::class,'profileKelulusanKSI'])->name('ex.profileKelulusanKSI');

Route::get('/user/home',[LoginRegisterController::class, 'userHome'])->name('user.home');
Route::get('/admin/home',[LoginRegisterController::class, 'adminHome'])->name('admin.home');

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/', function() {
        return view('home');
    });
    Route::get('auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::get('/admin/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::get('/admin/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');
    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
});