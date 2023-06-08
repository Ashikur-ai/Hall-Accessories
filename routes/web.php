<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\FrontEnd;
use App\Http\Controllers\FrontEnd\pageShowing;
use App\Http\Controllers\Backend\showPage;
use App\Http\Controllers\Backend\SuperAdminController;
use App\Http\Controllers\Booking;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Backend\ProductUploadController;
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

//Simbiot route
Route::get('/hotDeal',[FrontEnd::class, 'PageHotDeal'])->name('hotDeal');
Route::get('/bed',[FrontEnd::class, 'PageBed'])->name('bed');
Route::get('/readingTable',[FrontEnd::class, 'PageReadingTable'])->name('readingTable');
Route::get('/chair',[FrontEnd::class, 'PageChair'])->name('chair');
Route::get('/rack',[FrontEnd::class, 'PageRack'])->name('rack');
Route::get('/bookself',[FrontEnd::class, 'PageBookself'])->name('bookself');
Route::get('/kitchenTools',[FrontEnd::class, 'PageKitchenTool'])->name('kitchentool');
Route::get('/saleProduct',[FrontEnd::class, 'PageSaleProduct'])->name('saleProduct');
Route::get('/checkout',[FrontEnd::class, 'PageCheckout'])->name('checkout');
Route::get('/singleProduct/{id}',[FrontEnd::class, 'showSingleProduct'])->name('showSingleProduct');
Route::get('/myProduct',[FrontEnd::class, 'showMyProduct'])->name('showMyProduct');









//Frontend PageShowing
Route::get('/', [pageShowing::class, 'showIndex'])->name('showIndex');
//
//Route::get('/driver', [pageShowing::class, 'showDriverPage'])->name('showDriverPage');
//Route::get('/schedule', [pageShowing::class, 'showSchedulePage'])->name('showSchedulePage');
//Route::get('/onlineTicket', [pageShowing::class, 'showOnlineTicketPage'])->name('showOnlineTicketPage');
Route::get('/payment', [pageShowing::class, 'showPaymentPage'])->name('showPaymentPage');


//Frontend function

//login
Route::get('/login', [pageShowing::class, 'showUserLoginPage'])->name('showUserLoginPage');
Route::post('/customer-login', [CustomerController::class, 'login'])->name('customer-login');

Route::get('/history', [pageShowing::class, 'purchaseHistory'])->name('history');


//logout
Route::get('/logout_customer', [CustomerController::class, 'logout'])->name('logout_customer');


Route::get('/register', [pageShowing::class, 'showUserRegisterPage'])->name('showUserRegisterPage');
Route::post('/customer-register', [CustomerController::class, 'registration'])->name('customer-register');

Route::post('/user-dashboard', [pageShowing::class, 'showUserDashboardPage'])->name('showUserDashboardPage');

//booking ticket
Route::post('/booking', [Booking::class, 'Booking'])->name('Booking');

//monthly subscribe
Route::post('/monthly_subscribe', [CustomerController::class, 'monthly_subscribe'])->name('monthly-subscribe');

Route::post('/saleProduct', [FrontEnd::class, 'saleProduct'])->name('saleProduct');







                                    //Backend PageShowing

Route::get('/admin', [showPage::class, 'showAdminLoginPage'])->name('showAdminLoginPage');
Route::get('/dashboard', [SuperAdminController::class, 'showDashboardPage'])->name('showDashboardPage');
Route::get('/uploadProduct', [showPage::class, 'uploadProduct'])->name('showUploadProductPage');
Route::get('/checkOrders', [showPage::class, 'checkOrders'])->name('checkOrders');
Route::get('/allProducts', [showPage::class, 'showAllProducts'])->name('showAllProducts');


//Backend Function
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::get('/subscription', [SuperAdminController::class, 'subscription'])->name('subscription');
Route::get('/deleteProduct/{id}', [SuperAdminController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/deleteCartProduct/{id}', [SuperAdminController::class, 'deleteCartProduct'])->name('deleteCartProduct');
Route::post('/admin-dashboard', [showPage::class, 'show_DashboardPage'])->name('show_DashboardPage');
Route::post('/uploadProduct', [ProductUploadController::class, 'uploadProduct'])->name('uploadProduct');
Route::get('/placeOrder/{id}', [ProductUploadController::class, 'placeOrder'])->name('placeOrder');




