<?php
use App\Http\Controllers\custom_auth_controller;
use Illuminate\Support\Facades\Route;
use App\Models\createauser;
use app\models\manageissue;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\manageissuesController;
use App\Http\Controllers\searchController;


//userController
Route::get('/delete-student/{id}',[user_controller::class,'destroy']);
Route::get('/update-student/{id}',[user_controller::class,'edit']);
Route::post('/admin/dashboard/create-user',[user_controller::class,'create_user'])->name('user/creation');
Route::get('/admin/dashboard/show-user',[user_controller::class,'show'])->name('user/show');
Route::post('/admin/dashboard/create-user',[user_controller::class,'create_user'])->name('user/creation');
Route::get('/admin/dashboard/show-user',[user_controller::class,'show'])->name('user/show');
Route::get('/admin/dasboard/edit-user/{id}',[user_controller::class,'editShow'])->name('user/edit');


//custom auth controller
Route::get('/admin/login',[custom_auth_controller::class,'login'])->name('login');
Route::get('/user/login',[custom_auth_controller::class,'userLogin'])->name('userLogin');
Route::post('/store',[custom_auth_controller::class,'store'])->name('store');
Route::post('/user/auth',[custom_auth_controller::class,'userauth'])->name('userauth');
Route::get('/user/logout',[custom_auth_controller::class,'userlogout'])->name('userlogout');
Route::get('/admin/logout',[custom_auth_controller::class,'adminlogout'])->name('adminlogout');

//registration
Route::get('/register',[custom_auth_controller::class,'register']);
Route::post('/auth',[custom_auth_controller::class,'auth'])->name('auth.store');
Route::post('/auth/user',[custom_auth_controller::class,'loginUser'])->name('user/login');

//main
Route::get('/admin/dashboard',[custom_auth_controller::class,'dashboard'])->name('admin/dashboard');
Route::get('/admin/profile',[custom_auth_controller::class,'profile'])->name('admin/profile');
Route::get('/admin/dashboard/user',[custom_auth_controller::class,'dashboard1'])->name('admin/dashboard/user');

//manage issues controller
Route::post('/admin/dashboard/manage-isues/create',[manageissuesController::class,'post'])->name('add/issues');
Route::get('/admin/dashboard/show-issues',[manageissuesController::class,'show'])->name('show/issues');
Route::get('/delete-issues/{id}',[manageissuesController::class,'destroy_issues']);
Route::get('/edit-issues/{id}',[manageissuesController::class,'editShow'])->name('edit/issue');
Route::post('/edit-issues/data',[manageissuesController::class,'editData'])->name('edit/post');

// //search controller
Route::get('/',[searchController::class,'search'])->name('Search-Issues-main');
Route::get('Search-Issues/',[searchController::class,'search'])->name('Search-Issues');
Route::get('Show-Issues/{id}',[searchController::class,'show'])->name('show.issues');
 
// Route::get('/', function(){
//  return view('welcome');
// });