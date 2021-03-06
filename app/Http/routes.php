<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * route for calling API to get comment data.
 */
Route::get('/',"InstaController@getCommentData");

/**
 *  route for deleting DataBase Records
 */
Route::get('/delete',"InstaController@deleteDB");