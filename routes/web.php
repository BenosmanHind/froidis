<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageAdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfessionalAdminController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfessionalDevisController;


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


Route::get('/agriculture', function () {
    return view('agriculture');
});
Route::get('/oignon', function () {
    return view('oignon');
});
Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::get('/register-pro', function () {
    $wilayas = Wilaya::all();
    return view('auth.register-pro',compact('wilayas'));
});

Route::get('/login', function () {
    $wilayas = Wilaya::all();
    return view('auth.login',compact('wilayas'));
});

Route::get('/demande-devis', function () {
    $wilayas = Wilaya::all();
    return view('demande-devis',compact('wilayas'));
});

//admin route
Route::resource('/admin/categories',CategoryController::class);
Route::resource('/admin/products',ProductController::class);
Route::resource('/admin/professionals',ProfessionalAdminController::class);
Route::resource('/admin/inbox',MessageAdminController::class);
Route::get('/admin/messages-read/{id}', [MessageAdminController::class,'readMessage']);
Route::get('/admin/edit-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'showModal']);
Route::put('/admin/update-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'updateStatus']);
Route::resource('/admin',AdminController::class);

//professional route
Route::get('/warning', function () {

    return view('professional.warning');
});
Route::resource('/professional/demande-devis',ProfessionalDevisController::class);
Route::resource('/professional/contact-froidis',MessageController::class);
Route::get('/professional/messages-read/{id}', [MessageController::class,'readMessage']);
Route::get('/professional/my-informations', function () {

    return view('professional.informations');
});

Route::get('/professional/inbox', function () {

    return view('professional.inbox');
});
Route::resource('/professional',ProfessionalController::class);

//front routes
Route::get('/products/{slug}', [App\Http\Controllers\AccueilController::class, 'categoryProducts']);
Route::get('/product/{slug}', [App\Http\Controllers\AccueilController::class, 'detailProduct']);
Route::get('/telecharger-pdf/{document}', [App\Http\Controllers\AccueilController::class, 'telechargerPDF']);
Route::post('/demande-devis', [App\Http\Controllers\DevisController::class, 'store']);
Route::get('/success-mail', function () {

    return view('success-mail');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
