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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

##ROUTING PAGE
##LOGIN
Route::get('/', 'Controller_Login@openLogin')->name('login');
Route::post('/login/auth', 'Controller_Login@authenticate');
Route::get('/logout', 'Controller_Login@logout');

Route::group(['middleware' => 'auth'], function(){
	##Login
	//Login Choose
	Route::get('/login/choose', 'Controller_Login@openChooseLogin');

	##Admin
	Route::get('/admin', 'Controller_AdminUsers@openPage');
	// Archive
	Route::get('/admin/archive', 'Controller_AdminArchiveDocuments@openPage');
	Route::get('/admin/archive/table', 'Controller_AdminArchiveDocuments@dataTable')->name('archive.table');

	// Mitra
	Route::get('/admin/mitra', 'Controller_AdminMitra@openPage')->name('mitra.open');
	Route::get('/admin/mitra/table', 'Controller_AdminMitra@dataTable')->name('mitra.table');
	Route::post('/admin/submitmitra', 'Controller_AdminMitra@store')->name('mitra.store');
	Route::get('/admin/delmitra/{id}', 'Controller_AdminMitra@destroy');
	Route::get('/admin/createmitra', 'Controller_AdminMitra@create')->name('mitra.create');
	Route::get('/admin/editmitra/{id}', 'Controller_AdminMitra@edit')->name('mitra.edit');
	Route::put('/admin/updatemitra/{id}', 'Controller_AdminMitra@update')->name('mitra.update');

	// Product
	Route::get('/admin/products', 'Controller_AdminProducts@openPage');
	Route::get('/admin/products/table', 'Controller_AdminProducts@dataTable')->name('products.table');
	Route::post('/admin/submitproduct', 'Controller_AdminProducts@store')->name('products.store');
	Route::get('/admin/delproduct/{id}', 'Controller_AdminProducts@destroy');
	Route::get('/admin/createproduct', 'Controller_AdminProducts@create')->name('products.create');
	Route::get('/admin/editproduct/{id}', 'Controller_AdminProducts@edit')->name('products.edit');
	Route::put('/admin/updateproduct/{id}', 'Controller_AdminProducts@update')->name('products.update');

	// Search Doc
	Route::get('/admin/searchdocs', 'Controller_AdminSearchDocuments@openPage');

	// User
	Route::get('/admin/users', 'Controller_AdminUsers@openPage');
	Route::get('/admin/users/table', 'Controller_AdminUsers@dataTable')->name('users.table');
	Route::post('/admin/submituser', 'Controller_AdminUsers@store')->name('users.store');
	Route::get('/admin/deluser/{id}', 'Controller_AdminUsers@destroy');
	Route::get('/admin/createuser', 'Controller_AdminUsers@create')->name('users.create');
	Route::get('/admin/edituser/{id}', 'Controller_AdminUsers@edit')->name('users.edit');
	Route::put('/admin/updateuser/{id}', 'Controller_AdminUsers@update')->name('users.update');

	##Engineer
	Route::get('/engineer', 'Controller_EngineerYourProjects@openPage');
	// Doc Tools
	Route::get('/engineer/doctools', 'Controller_EngineerDocumentsTools@openPage');

	// Handover
	Route::get('/engineer/handover', 'Controller_EngineerHandoverProjects@openPage');
	Route::get('/engineer/handover/table', 'Controller_EngineerHandoverProjects@dataTable')->name('handover.table');
	Route::patch('/engineer/handover/changestat', 'Controller_EngineerHandoverProjects@changeStatus');
	Route::patch('/engineer/handover/done', 'Controller_EngineerHandoverProjects@handoverDone');

	// Search Doc
	Route::get('/engineer/searchdocs', 'Controller_EngineerSearchDocuments@openPage');

	// Your Project
	Route::get('/engineer/projects', 'Controller_EngineerYourProjects@openPage');
	Route::get('/engineer/projects/table', 'Controller_EngineerYourProjects@dataTable')->name('projects.table');
	Route::patch('/engineer/projects/changestat', 'Controller_EngineerYourProjects@changeStatus');

	##GUEST
	Route::get('/guest', 'Controller_GuestSearchDocuments@openPage');
	Route::get('/guest/searchdocs', 'Controller_GuestSearchDocuments@openPage');

	##Manager
	Route::get('/manager', 'Controller_ManagerHome@openAllDataPage');
	// Approval Project
	Route::get('/manager/approval', 'Controller_ManagerApprovalProjects@openPage');
	Route::get('/manager/approval/table', 'Controller_ManagerApprovalProjects@dataTable')->name('approval.table');
	Route::patch('/manager/approval/choose', 'Controller_ManagerApprovalProjects@approvalProject');

	// Assign Project
	Route::get('/manager/assign', 'Controller_ManagerAssignProjects@openPage');
	Route::get('/manager/handover/project/{id}', 'Controller_ManagerAssignProjects@fillProject');
	Route::get('/manager/handover/pic/{id}', 'Controller_ManagerAssignProjects@fillNewPIC');
	Route::post('/manager/newproject', 'Controller_ManagerAssignProjects@storeNew');
	Route::post('/manager/newhandover', 'Controller_ManagerAssignProjects@storeHandover');

	// Home
	Route::get('/manager/home', 'Controller_ManagerHome@openAllDataPage');
	Route::post('/manager/home/yearly', 'Controller_ManagerHome@openFilteredDataPage');

	// List Project
	Route::get('/manager/projects', 'Controller_ManagerListProjects@openPage');
	Route::get('/manager/projects/table', 'Controller_ManagerListProjects@dataTable')->name('listprojects.table');

	// Search Doc
	Route::get('/manager/searchdocs', 'Controller_ManagerSearchDocuments@openPage');

	##TABLE
	Route::get('/searchdocs/table', 'Controller_ManagerSearchDocuments@dataTable')->name('searchdocs.table');
});

?>