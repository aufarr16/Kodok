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
Route::get('/admin/mitra', 'Controller_AdminMitra@openPage')->name('mitra.open');

Route::post('/admin/submitmitra', 'Controller_AdminMitra@store')->name('mitra.store');
Route::get('/admin/delmitra/{id}', 'Controller_AdminMitra@destroy');
Route::get('/admin/createmitra', 'Controller_AdminMitra@create')->name('mitra.create');

Route::post('/admin/submitproduct', 'Controller_AdminProducts@store')->name('products.store');
Route::get('/admin/delproduct/{id}', 'Controller_AdminProducts@destroy');
Route::get('/admin/createproduct', 'Controller_AdminProducts@create')->name('products.create');
Route::put('/admin/editproduct/{id}', 'Controller_AdminProducts@edit')->name('products.edit');
Route::put('/admin/updateproduct', 'Controller_AdminProducts@update')->name('products.update');

Route::post('/admin/submituser', 'Controller_AdminUsers@store')->name('user.store');
Route::get('/admin/deluser/{id}', 'Controller_AdminUsers@destroy');
Route::get('/admin/createuser', 'Controller_AdminUsers@create')->name('user.create');

##Engineer
Route::get('/engineer/doctools', 'Controller_EngineerDocumentsTools@openPage');
Route::get('/engineer/handover', 'Controller_EngineerHandoverProjects@openPage');
Route::get('/engineer/searchdocs', 'Controller_EngineerSearchDocuments@openPage');
Route::get('/engineer/projects', 'Controller_EngineerYourProjects@openPage');

##GUEST
Route::get('/guest/searchdocs', 'Controller_GuestSearchDocuments@openPage');

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

##TABLE
Route::get('/admin/mitra/table', 'Controller_AdminMitra@dataTable')->name('mitra.table');
Route::get('/admin/users/table', 'Controller_AdminUsers@dataTable')->name('users.table');
Route::get('/admin/products/table', 'Controller_AdminProducts@dataTable')->name('products.table');

?>