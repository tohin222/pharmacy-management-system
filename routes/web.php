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

Auth::routes();

Route::get('/admin/panel', 'HomeController@index')->name('home');
Route::get('/admin/panel/sells', 'HomeController@sells')->name('sells');
Route::get('/addmedicine/{medicine_id}/{quantity}', 'HomeController@quantity');



//admin panel

Route::get('/admin/medicine/add', 'MedicineController@medicine_add')->name('medicine_add');

Route::post('/admin/medicine/create', 'MedicineController@medicine_create')->name('medicine_create');
Route::get('/admin/medicine/show', 'MedicineController@medicine_show')->name('medicine_show');


Route::get('/admin/disease/company_as_disease', 'ComapnyController@company_as_disease')->name('company_as_disease');
Route::get('/admin/company/add', 'ComapnyController@company_add')->name('company_add');
Route::post('/admin/company/create', 'ComapnyController@company_create')->name('company_create');
Route::get('/admin/company/show', 'ComapnyController@company_show')->name('company_show');

Route::get('/admin/disease/add', 'DiseaseController@disease_add')->name('disease_add');
Route::post('/admin/disease/create', 'DiseaseController@disease_create')->name('disease_create');
Route::get('/admin/disease/show', 'DiseaseController@disease_show')->name('disease_show');
