<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/cart', function () {
    return view('cart.index');
})->name('cart.index');

Route::get('/category', function () {
    return view('category.index');
})->name('category.index');

Route::get('/category/show', function () {
    return view('category.show');
})->name('category.show');

//Ticket - quản lý phản ánh
Route::get('/ticket', function(){
    return view('ticket.index');
})->name('ticket.index');
Route::get('/ticket/show', function(){
    return view('ticket.show');
})->name('ticket.show');
Route::get('/ticket/create', function(){
    return view('ticket.create');
})->name('ticket.create');


//Coupon - quản lý coupon
Route::get('/coupon', function(){
    return view('coupon.index');
})->name('coupon.index');
Route::get('/coupon/buy', function(){
    return view('coupon.buy');
})->name('coupon.buy');
Route::get('/coupon/topup', function(){
    return view('coupon.topup');
})->name('coupon.topup');
Route::get('/coupon/show', function(){
    return view('coupon.show');
})->name('coupon.show');


//Tra cứu máy bán hàng

Route::get('/machine',function(){
    return view('machine.index');
})->name('machine.index');


//Tra cứu giao dịch

Route::get('/transactions',function(){
    return view('transactions.index');
})->name('transactions.index');

Route::get('/transactions/show',function(){
    return view('transactions.show');
})->name('transactions.show');


//Thông tin tài khoản

Route::get('/account/my-account',function(){
    return view('account.my-account');
})->name('account.my-account');

