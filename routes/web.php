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

//Route::get('/upload', "Controller_EngineerUploadDoc@upload")->name('engineer.upload')
Route::get('/upload', "Controller_EngineerUploadDocument@openPage");

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

	//Export
	Route::get('/admin/export', 'Controller_AdminExportData@openPage');
	Route::get('/admin/export/mitra', 'Controller_AdminExportData@exportMitra');
	Route::get('/admin/export/product', 'Controller_AdminExportData@exportProduct');
	Route::get('/admin/export/project', 'Controller_AdminExportData@exportProject');
	Route::get('/admin/export/handover', 'Controller_AdminExportData@exportHandover');
	Route::get('/admin/export/pketerangan', 'Controller_AdminExportData@exportPKeterangan');
	Route::get('/admin/export/pstat', 'Controller_AdminExportData@exportPStatus');
	Route::get('/admin/export/ptype', 'Controller_AdminExportData@exportPType');
	Route::get('/admin/export/user', 'Controller_AdminExportData@exportUser');
	Route::get('/admin/export/ulevel', 'Controller_AdminExportData@exportULevel');

	//List Project admin
	Route::get('/admin/projects', 'Controller_AdminListProjects@openPage');
	Route::get('/admin/projects/table', 'Controller_AdminListProjects@dataTable')->name('adminlistprojects.table');
	Route::get('/admin/projects/detail/{id}', 'Controller_AdminListProjects@detail')->name('adminlistprojects.detail');
	
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

	##Eksekutif
	Route::get('/eksekutif/home', 'Controller_ManagerHome@openAllDataPage');
	Route::get('/eksekutif/projects', 'Controller_ManagerListProjects@openPage');

	##Engineer
	Route::get('/engineer', 'Controller_EngineerYourProjects@openPage');
	// Doc Tools
	Route::get('/engineer/doctools', 'Controller_EngineerDocumentsTools@openPage');

	// Handovered Project
	Route::get('/engineer/handover', 'Controller_EngineerHandoverProjects@openPage');
	Route::get('/engineer/handover/table', 'Controller_EngineerHandoverProjects@dataTable')->name('handover.table');
	Route::patch('/engineer/handover/changestat', 'Controller_EngineerHandoverProjects@changeStatus');
	Route::patch('/engineer/handover/done', 'Controller_EngineerHandoverProjects@handoverDone');

	Route::get('/engineer/historyhover', 'Controller_EngineerHistoryHandover@openPage');
	Route::get('/engineer/historyhover/table', 'Controller_EngineerHistoryHandover@dataTable')->name('historyhover.table');

	//List Project enginner
	Route::get('/engineer/listprojects', 'Controller_EngineerListProjects@openPage');
	Route::get('/engineer/listprojects/table', 'Controller_EngineerListProjects@dataTable')->name('engineerlistprojects.table');
	Route::get('/engineer/listprojects/detail/{id}', 'Controller_EngineerListProjects@detail')->name('engineerlistprojects.detail');

	// Search Doc
	Route::get('/engineer/searchdocs', 'Controller_EngineerSearchDocuments@openPage');

	// Own Project
	Route::get('/engineer/projects', 'Controller_EngineerYourProjects@openPage');
	Route::get('/engineer/projects/table', 'Controller_EngineerYourProjects@dataTable')->name('projects.table');
	Route::patch('/engineer/projects/changestat', 'Controller_EngineerYourProjects@changeStatus');
	Route::get('/engineer/projects/editprogress/{id}', 'Controller_EngineerYourProjects@editPBN')->name('progress.edit');
	Route::put('/engineer/projects/updateprogress/{id}', 'Controller_EngineerYourProjects@updatePBN')->name('progress.update');
	Route::get('/engineer/projects/editpic/{id}', 'Controller_EngineerYourProjects@editBussinessPIC')->name('pic.edit');
	Route::put('/engineer/projects/updatepic/{id}', 'Controller_EngineerYourProjects@updateBussinessPIC')->name('pic.update');

	Route::get('/engineer/history', 'Controller_EngineerHistoryProjects@openPage');
	Route::get('/engineer/history/table', 'Controller_EngineerHistoryProjects@dataTable')->name('history.table');

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
	Route::get('/manager/projects/export', 'Controller_ManagerListProjects@export');
	Route::get('/manager/projects/detail/{id}', 'Controller_ManagerListProjects@detail')->name('listprojects.detail');
	Route::get('/manager/projects/edit/{id}', 'Controller_ManagerListProjects@editProject')->name('projects.edit');
	Route::put('/manager/projects/update/{id}', 'Controller_ManagerListProjects@updateProject')->name('projects.update');
	Route::get('/manager/projects/delete/{id}', 'Controller_ManagerListProjects@deleteProject')->name('projects.delete');

	// Search Doc
	Route::get('/manager/searchdocs', 'Controller_ManagerSearchDocuments@openPage');

	##TABLE
	Route::get('/searchdocs/table', 'Controller_ManagerSearchDocuments@dataTable')->name('searchdocs.table');
});

?>