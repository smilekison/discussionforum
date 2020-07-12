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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/nepal', 'PagesController@nepal');
Route::get('/education', 'PagesController@education');
Route::get('/sports', 'PagesController@sports');
Route::get('/json', 'PagesController@json');

/*For email verification*/
Auth::routes(['verify'=>true]);

/*For News related routing*/
Route::resource('news','NewsController');
Route::get('/removednews', 'NewsController@removedNews');
Route::get('/restorenews', 'NewsController@restoreNews');

/*For User Related routing*/
Route::resource('user','UserController');
Route::get('/removeduser', 'UserController@removedUsers');
Route::get('/restoreUser', 'UserController@restoreUser');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

/*Google login in application*/
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


/*For login*/
Route::post('/login/custom',[
	'uses'=>'LoginController@login',
	'as' => 'login.custom'
]);


Route::group(['middleware'=>'auth'], function(){

	Route::get('/adminpanel',function(){
		return view('admin.adminpanel');	
	})->name('adminpanel');
	Route::get('/home',function(){
		return view('home')->name('home');	
	});
});