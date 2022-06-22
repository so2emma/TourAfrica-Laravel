<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/booking', [PagesController::class, 'booking'])->name('pages.booking');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/destination', [PagesController::class, 'destination'])->name('pages.destination');
Route::get('/destination/{id}', [PagesController::class, 'show']);
Route::get('/booking/tour', [PagesController::class, 'booking_tour' ])->name('pages.booking-tour');


Route::post('/store/contact',[ContactController::class, 'store_contact']);
Route::post('/store/booking',[ContactController::class, 'store_booking']);



// ADMIN SECTION
Route::get('/index', [DestinationController::class, 'index']);

Route::get('/create', function(){
    return view('admin.create');
});

Route::post('/post',[DestinationController::class,'store']);
Route::delete('/delete/{id}',[DestinationController::class,'destroy']);
Route::get('/edit/{id}',[DestinationController::class,'edit']);

Route::delete('/deleteimage/{id}',[DestinationController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[DestinationController::class,'deletecover']);

Route::put('/update/{id}',[DestinationController::class,'update']);


