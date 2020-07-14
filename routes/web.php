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

##ROUTING PAGE
##LOGIN
Route::get('/', 'controller_login@openPage');

##ADMIN 
Route::get('/admin/archive', 'controller_adminarchivedocuments@openPage');
Route::get('/admin/products', 'controller_adminproducts@openPage');
Route::get('/admin/searchdocs', 'controller_adminsearchdocuments@openPage');
Route::get('/admin/users', 'controller_adminusers@openPage');
Route::get('/admin/mitra', 'controller_adminmitra@openPage');

##MANAGER
Route::get('/manager/approval', 'controller_managerapprovalprojects@openPage');
Route::get('/manager/assign', 'controller_managerassignprojects@openPage');
Route::get('/manager/home', 'controller_managerhome@openPage');
Route::get('/manager/projects', 'controller_managerlistprojects@openPage');
Route::get('/manager/searchdocs', 'controller_managersearchdocuments@openPage');

##ENGINEER
Route::get('/engineer/doctools', 'controller_engineerdocumentstools@openPage');
Route::get('/engineer/handover', 'controller_engineerhandoverprojects@openPage');
Route::get('/engineer/searchdocs', 'controller_engineersearchdocuments@openPage');
Route::get('/engineer/projects', 'controller_engineeryourprojects@openPage');

##GUEST
Route::get('/guest/searchdocs', 'controller_guestsearchdocuments@openPage');

?>