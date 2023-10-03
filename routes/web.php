<?php

use Illuminate\Support\Facades\Route;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfessionalAdminController;

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

Route::get('/demande-devis', function () {
    $wilayas = Wilaya::all();
    return view('demande-devis',compact('wilayas'));
});

//admin route
Route::resource('/admin/categories',CategoryController::class);
Route::resource('/admin/products',ProductController::class);
Route::resource('/admin/professionals',ProfessionalAdminController::class);
Route::get('/admin/edit-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'showModal']);
Route::put('/admin/update-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'updateStatus']);


//professional route
Route::get('/warning', function () {

    return view('professional.warning');
});
Route::get('/professional', function () {

    return view('professional.dashboard-professional');
});
//front routes
Route::get('/products/{slug}', [App\Http\Controllers\AccueilController::class, 'categoryProducts']);
Route::get('/product/{slug}', [App\Http\Controllers\AccueilController::class, 'detailProduct']);
Route::get('/telecharger-pdf/{document}', [App\Http\Controllers\AccueilController::class, 'telechargerPDF']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
