<?php

use Illuminate\Support\Facades\Route;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/sign-in', function () {
    $wilayas = Wilaya::all();
    return view('auth.sign-in',compact('wilayas'));
});


//admin route
Route::resource('/admin/categories',CategoryController::class);
Route::resource('/admin/products',ProductController::class);

//front routes
Route::get('/products/{slug}', [App\Http\Controllers\AccueilController::class, 'categoryProducts']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
