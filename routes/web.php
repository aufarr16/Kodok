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
Route::post('/login/submitdata', 'Controller_Login@postLogin');

##Admin 
Route::get('/admin/archive', 'Controller_AdminArchiveDocuments@openPage');
Route::get('/admin/products', 'Controller_AdminProducts@openPage');
Route::get('/admin/searchdocs', 'Controller_AdminSearchDocuments@openPage');
Route::get('/admin/users', 'Controller_AdminUsers@openPage');
Route::get('/admin/mitra', 'Controller_AdminMitra@openPage');

Route::post('/admin/submitmitra', 'Controller_AdminMitra@store');
Route::get('/admin/delmitra/{id}', 'Controller_AdminMitra@destroy');

Route::post('/admin/submitproduct', 'Controller_AdminProducts@store');

Route::post('/admin/submituser', 'Controller_AdminUsers@store');

Route::get('/admin/mitra/table', 'Controller_AdminUsers@dataTable');

##Manager
Route::get('/manager/approval', 'Controller_ManagerApprovalProjects@openPage');
Route::get('/manager/assign', 'Controller_ManagerAssignProjects@openPage');
Route::get('/manager/home', 'Controller_ManagerHome@openPage');
Route::get('/manager/projects', 'Controller_ManagerListProjects@openPage');
Route::get('/manager/searchdocs', 'Controller_ManagerSearchDocuments@openPage');

Route::get('/manager/handover/project/{id}', 'Controller_ManagerAssignProjects@fillProject');
Route::get('/manager/handover/pic/{id}', 'Controller_ManagerAssignProjects@fillNewPIC');

Route::post('/manager/newproject', 'Controller_ManagerAssignProjects@storeNew');
Route::post('/manager/newhandover', 'Controller_ManagerAssignProjects@storeHandover');

##Engineer
Route::get('/engineer/doctools', 'Controller_EngineerDocumentsTools@openPage');
Route::get('/engineer/handover', 'Controller_EngineerHandoverProjects@openPage');
Route::get('/engineer/searchdocs', 'Controller_EngineerSearchDocuments@openPage');
Route::get('/engineer/projects', 'Controller_EngineerYourProjects@openPage');

##GUEST
Route::get('/guest/searchdocs', 'Controller_GuestSearchDocuments@openPage');

?>