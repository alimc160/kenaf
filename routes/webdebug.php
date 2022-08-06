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
 

Route::get('/logtest', function(){
    \Log::channel('error_log')->error('Showing the user profile for user: ');
    \Log::channel('debug')->debug('Showing the user profile for user: ');

});
