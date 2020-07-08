<?php

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

Route::get('/', function () {
    return view('testcss');
});

##LOGIN
Route::get('/login', 'controller_login@openPage');

##ADMIN 
Route::get('/admin/archive', 'controller_adminarchivedocuments@openPage');
Route::get('/admin/products', 'controller_adminproducts@openPage');
Route::get('/admin/searchdocs', 'controller_adminsearchdocuments@openPage');
Route::get('/admin/users', 'controller_adminusers@openPage');

##MANAGER


##ENGINEER


##GUEST
Route::get('/guest/searchdocs', 'controller_guestsearchdocuments@openPage');
