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
    return view('welcome');
});
//
//Route::get("about",function (){
//    return 'this is about';
//});
//
//Route::get("contact",function (){
//    return 'this is contact';
//});

Route::get("post/{id}",function ($id){
    return 'this is post '.$id;
});

Route::get("comment/{id?}",function ($id='default'){
    return "this is $id";
});

Route::get("add/{num1}/{num2}",function ($num1,$num2){
    return "this is ".($num1+$num2);
});

Route::view("services","services");
Route::view("about","about");
Route::view("contact-us","contact");

Route::view("sale","sale")->name('sale');

Route::get("page/{id}","PageController@detail")->name("page.detail");
Route::view("test","test");

Route::get("dashboard/index","DashboardController@index")->name('dashboard.index');
Route::get("dashboard/create","DashboardController@create")->name('dashboard.create');
Route::get("dashboard/edit","DashboardController@edit")->name('dashboard.edit');

Route::get('form','FormController@create')->name('form.create');
//Route::get('form','FormController@create')->name('form.create')->middleware('auth');
Route::post('form','FormController@store')->name('form.store');

Route::get('form-delete/{id}','FormController@destroy')->name('form.destroy');
Route::get('form-edit/{id}','FormController@edit')->name('form.edit');
Route::post('form-update/{id}','FormController@update')->name('form.update');


Route::resource('sankyi','SanKyiController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('denied','denied')->name('denied');
