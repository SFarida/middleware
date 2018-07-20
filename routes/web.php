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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/ip', ['middleware' => 'agency', function(){
    return "IP";
}]);

Auth::routes();

Route::get('/', 'HomeController@getAgencies');


Route::get('/musango',['as' => 'musango', 'uses' => 'AgencyController@musangoAgency']);
Route::get('/mondial', ['as' => 'mondial', 'uses' => 'AgencyController@mondialAgency']);
Route::get('/diamond', ['as' => 'diamond', 'uses' => 'AgencyController@diamondAgency']);

// Admin route
Route::get('/agencies', ['as' => 'manage', 'uses' => 'AdminController@index']);
Route::get('/manage-agancies', ['as' => 'manage', 'uses' => 'AdminController@manageAgencies']);
Route::get('/agencies/create','AdminController@create');
Route::post('/agencies/create','AdminController@store');
Route::get('/manage-agencies/edit-agency/{id}','AdminController@edit');
Route::patch('/manage-agencies/edit-agency/{id}','AdminController@update');
Route::delete('/manage-agencies/delete-agency/{id}','AdminController@destroy');