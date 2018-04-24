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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>hellow world</h1>';
// });



// route::get('/users/{id}', function($id) { // how to add dynamic route
//     return 'this is user '.$id;
// });

// route::get('/users/{id}/{name}', function($id, $name) { // how to add dynamic route
//     return 'this is user '.$name.' with an id of '.$id;
// });



// route::get('/about', function() {
//     return view('pages.about'); //pages.abpout is  cleaner than pages/about
// });




// Route::get('/', function () {
//     return view('pages.index');
// });

*/

Route::get('', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController'); /*this map routes to all PostController functions*/

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
