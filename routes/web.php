<?php

use App\Http\Controllers\Admin\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ContactUsController;


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
    return redirect()->route('login');
});

Route::get('login', [LoginController::class, 'viewlogin'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('admin.login');

Route::get('/listing', [ListingController::class, 'index'])->name('admin.list');
Route::get('/listing/create', [ListingController::class, 'create'])->name('admin.listing.create');
Route::post('/listing/store', [ListingController::class, 'store'])->name('admin.listing.store');
Route::get('/contact-us', [ListingController::class, 'contactUs'])->name('admin.contact');;
Route::get('/listing/datatables', [ListingController::class, 'index'])->name('admin.listing.datatables');
Route::get('/listing/{id}', [ListingController::class, 'edit'])->name('admin.listing.edit');
Route::post('/listing/{id}', [ListingController::class, 'update'])->name('admin-listing-update');
Route::post('/listing/delete/{id}', [ListingController::class, 'delete'])->name('admin.listing.delete');





//Route::get('/amenities',[ListingController::class,'index'])->name('admin.amenities');
