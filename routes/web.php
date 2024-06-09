<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MessageAdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfessionalAdminController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ProfessionalDevisController;
use App\Http\Controllers\ProjectController;


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
Route::get('/entrepot-frigorifique', function () {
    return view('entrepot');
});
Route::get('/industrie', function () {
    return view('industrie');
});
Route::get('/professionnels', function () {
    return view('professionnels');
});






Route::get('/fruit-et-legume', function () {
    return view('fruit-et-legume');
});
Route::get('/viandes-et-poissons', function () {
    return view('viandes-et-poissons');
});
Route::get('/produits-laitiers', function () {
    return view('produits-laitiers');
});
Route::get('/boissons', function () {
    return view('boissons');
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
Route::resource('/admin/categories',CategoryController::class)->middleware('can:admin');
Route::resource('/admin/products',ProductController::class)->middleware('can:admin');
Route::resource('/admin/projects',ProjectController::class)->middleware('can:admin');
Route::resource('/admin/professionals',ProfessionalAdminController::class)->middleware('can:admin');
Route::resource('/admin/inbox',MessageAdminController::class)->middleware('can:admin');;
Route::get('/admin/messages-sent', [MessageAdminController::class,'sentMessage'])->middleware('can:admin');
Route::get('/admin/messages-read/{id}', [MessageAdminController::class,'readMessage'])->middleware('can:admin');
Route::get('/admin/messages-read-sent/{id}', [MessageAdminController::class,'readMessageSent'])->middleware('can:admin');
Route::get('/admin/edit-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'showModal'])->middleware('can:admin');
Route::get('/admin/detail-professional/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'detailPro'])->middleware('can:admin');
Route::put('/admin/update-status/{id}', [App\Http\Controllers\ProfessionalAdminController::class, 'updateStatus'])->middleware('can:admin');
Route::resource('/admin',AdminController::class)->middleware('can:admin');
Route::get('/download-file/{file}',  [MessageAdminController::class,'downloadFile']);

//professional route
Route::get('/warning', function () {

    return view('professional.warning');
});

Route::resource('/professional/demande-devis',ProfessionalDevisController::class)->middleware('can:professional');
Route::resource('/professional/contact-froidis',MessageController::class)->middleware('can:professional');
Route::get('/professional/messages-read/{id}', [MessageController::class,'readMessage'])->middleware('can:professional');
Route::get('/professional/messages-read-inbox/{id}', [MessageController::class,'readMessageInbox'])->middleware('can:professional');
Route::get('/professional/inbox', [MessageController::class,'inbox'])->middleware('can:professional');
Route::resource('/professional/my-informations',InformationController::class)->middleware('can:professional');
Route::resource('/professional',ProfessionalController::class)->middleware('can:professional');

//front routes
Route::get('/products/{slug}', [App\Http\Controllers\AccueilController::class, 'categoryProducts']);
Route::get('/product/{slug}', [App\Http\Controllers\AccueilController::class, 'detailProduct']);
Route::get('/telecharger-pdf/{document}', [App\Http\Controllers\AccueilController::class, 'telechargerPDF']);
Route::post('/demande-devis', [App\Http\Controllers\DevisController::class, 'store']);
Route::get('/success-mail', function () {

    return view('success-mail');
});
Route::get('/detail-project', function () {

    return view('detail-project');
});


//catalogue : 
Route::get('/catalogue', function () {

    return view('catalogue');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
