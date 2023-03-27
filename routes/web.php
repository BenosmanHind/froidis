<?php

use Illuminate\Support\Facades\Route;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome-new');
});
Route::get('/detail-product', function () {
    return view('detail-product');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/admin', function () {
    return view('admin.dashboard-admin');
});
Route::get('/customers', function () {
    return view('admin.customers');
});
Route::get('/register-pro', function () {
    $wilayas = Wilaya::all();
    return view('auth.register-pro',compact('wilayas'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
