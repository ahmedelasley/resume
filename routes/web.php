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


/*
|--------------------------------------------------------------------------
| Web Site
|--------------------------------------------------------------------------
|
*/
Route::get('/', 'WelcomeController@index')->name('website');
Route::post('/', 'WelcomeController@store')->name('contact');

/*
|--------------------------------------------------------------------------
| Web Site Administrator
|--------------------------------------------------------------------------
|
*/

//Route::get('/admin', function () { return view('auth.login'); });
//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index');
Route::resource('/skills', 'SkillsController');
Route::resource('/educations', 'EducationController');
Route::resource('/information', 'InformationController');
Route::resource('/experiences', 'ExperienceController');
