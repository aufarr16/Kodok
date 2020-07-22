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
Route::get('/', 'Controller_Login@openLogin');
Route::get('/login/choose', 'Controller_Login@openChooseLogin');

##Admin 
Route::get('/admin/archive', 'Controller_AdminArchiveDocuments@openPage');
Route::get('/admin/products', 'Controller_AdminProducts@openPage');
Route::get('/admin/searchdocs', 'Controller_AdminSearchDocuments@openPage');
Route::get('/admin/users', 'Controller_AdminUsers@openPage');
Route::get('/admin/mitra', 'Controller_AdminMitra@openPage');

##Manager
Route::get('/manager/approval', 'Controller_ManagerApprovalProjects@openPage');
Route::get('/manager/assign', 'Controller_ManagerAssignProjects@openPage');
Route::get('/manager/home', 'Controller_ManagerHome@openPage');
Route::get('/manager/projects', 'Controller_ManagerListProjects@openPage');
Route::get('/manager/searchdocs', 'Controller_ManagerSearchDocuments@openPage');

##Engineer
Route::get('/engineer/doctools', 'Controller_EngineerDocumentsTools@openPage');
Route::get('/engineer/handover', 'Controller_EngineerHandoverProjects@openPage');
Route::get('/engineer/searchdocs', 'Controller_EngineerSearchDocuments@openPage');
Route::get('/engineer/projects', 'Controller_EngineerYourProjects@openPage');

##GUEST
Route::get('/guest/searchdocs', 'Controller_GuestSearchDocuments@openPage');

?>