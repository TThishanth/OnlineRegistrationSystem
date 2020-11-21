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
    return view('home');
});

Auth::routes();

Route::get('/reset', 'HomeController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminDashboardController@index');


Route::post('admin/repeats', 'AdminRepeatsController@store');

Route::post('admin/academics', 'AdminAcademicsController@store');

Route::post('admin/hostels', 'AdminHostelsController@store');

Route::group(['middleware'=>'admin'],function(){

    Route::resource('admin/users', 'AdminUsersController')->middleware('useradmin');

    Route::resource('admin/roles', 'AdminRolesController')->middleware('useradmin');

    Route::resource('admin/jobs', 'AdminJobsController')->middleware('useradmin');

    Route::get('/admin/firstYear', 'AdminYearsController@firstYear');

    Route::get('/admin/secondYear', 'AdminYearsController@secondYear');

    Route::get('/admin/thirdYear', 'AdminYearsController@thirdYear');

    Route::get('/admin/fourthYear', 'AdminYearsController@fourthYear');

    Route::get('/admin/boysHostel', 'AdminHostelGendersController@boysHostel')->middleware('boyshosteladmin');

    Route::get('/admin/girlsHostel', 'AdminHostelGendersController@girlsHostel')->middleware('girlshosteladmin');

    Route::resource('admin/repeats', 'AdminRepeatsController', ['except' => 'store'])->middleware('repeatadmin');

    Route::resource('admin/academics', 'AdminAcademicsController', ['except' => 'store'])->middleware('academicadmin');

    Route::get('/admin/boyHostelUnApproveds', 'AdminUnApprovedController@boysHostel')->middleware('boyshosteladmin');

    Route::get('/admin/girlHostelUnApproveds', 'AdminUnApprovedController@girlsHostel')->middleware('girlshosteladmin');

    Route::get('/admin/repeatUnApproveds', 'AdminUnApprovedController@repeat')->middleware('repeatadmin');

    Route::get('/admin/academicUnApproveds', 'AdminUnApprovedController@academic')->middleware('academicadmin');

    Route::resource('admin/hostels', 'AdminHostelsController', ['except' => 'store']);

});

Route::get('/repeat', function () {
    return view('repeatForm');
});

Route::get('/academic', function () {
    return view('academicForm');
});

Route::get('/hostel', function () {
    return view('hostelForm');
});

Route::get('/notAllowed', function () {
    return view('inc.Xmsg');
});



