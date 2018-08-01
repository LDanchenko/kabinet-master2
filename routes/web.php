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

//все маршруты пишем здесь

//Route::get('/', 'LoginController@login'); //все товары
//Route::get('/home', 'HomeController@index'); //все товары


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/schedule/', 'HomeController@show'); //pokazat 1 tovar


Auth::routes();
//главная


//Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

 //   Route::get('/', 'AdminController@index');  //tovaru
  //  Route::get('/groups', 'AdminController@groups');  //tovaru
 //   Route::get('/teachers', 'AdminController@teachers');  //tovaru
  //  Route::get('/timetable', 'AdminController@timetable');  //tovaru
//

//});

//Route::get('/access_denied', function (){
  //  return ('доступ только для администратора =Р'); //сделать вью
//});


