<?php

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
    if(Auth::check()){
        if(Auth::user()->isPending() || Auth::user()->isDisabled()) {
            Auth::logout();
            return redirect('auth/login')->with('info', 'Insert message here');
        }
        return view('welcome');
    }
    return redirect('login');
});
Route::get('display/{id}', 'UserController@userRole');


Route::get('superadmin', function () {
    return view('superadmin.layouts');
});

    Route::get('admin', function () {
        return view('admin.layout');

});
Route::get('user','UserViewRide@showHome');
Route::get('user_viewride','UserViewRide@show');
Route::get('map&{id}','UserViewRide@map');
Route::get('addride', function () {
    return view('superadmin.addride');
});
    Route::get('postview&{id}', 'UserViewRide@postview');


Route::get('view_report','query_controller@ViewReport');
Route::get('search','search@search');


Route::get('addquery&{id}','query_controller@index');


Route::get('viewride','createride@show');
Route::post('storeride','createride@store');
Route::get('editride&{id}','createride@edit');
Route::post('update&{id}','createride@update');
Route::get('delete&{id}','createride@delete');
Route::get('viewuser','UserController@show');

Route::get('/home', 'HomeController@index');
Route::get('viewquery&{id}','query_controller@show');
Route::post('storequery','query_controller@store');
Route::get('admin_viewride','admin_createride@show');
Route::post('admin_storeride','admin_createride@store');
Route::get('admin_viewquery&{id}','admin_querycontroller@show');
Route::post('admin_storequery','admin_querycontroller@store');
Route::post('user_storequery','UserViewRide@store');
Route::get('admin_addride', function () {
    return view('admin.admin_addride');
});
Route::get('admin_addquery&{id}', 'admin_querycontroller@index');
Route::get('query','query_controller@create');
Route::get('admin_query','admin_querycontroller@create');
Route::get('admin_editride&{id}','admin_createride@edit');
Route::post('admin_update&{id}','admin_createride@update');
Route::get('admin_delete&{id}','admin_createride@delete');
Route::get('user_deleteq&{id}','UserViewRide@delete');


Auth::routes();

