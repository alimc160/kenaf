<?php


use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->name('admin.')->group(function (){
    Route::get('login', 'LoginController@loginForm')->name('login.form');
    Route::post('login', 'LoginController@login')->name('login');
});
Route::middleware('auth')->group(function () {
    Route::namespace('Admin')->name('admin.')->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('users', 'UserController@index')->name('users.index');
        Route::get('users/create', 'UserController@create')->name('users.create');
        Route::post('users/create', 'UserController@store')->name('users.store');
        Route::get('get-projects', 'ProjectController@index')->name('get.project');
        Route::any('create-project', 'ProjectController@store')->name('project.store');
        Route::get('users/{id}', 'UserController@show')->name('users.show');
        Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');
        Route::post('users/update/{id}', 'UserController@updateStatus')->name('users.update.status');
        Route::get('projects/create', 'ProjectController@create')->name('project.create');
        Route::get('project/{id}', 'ProjectController@show')->name('project.show');
        Route::delete('project/{id}', 'ProjectController@destroy')->name('project.destroy');
        Route::get('feed', 'FeedController@index')->name('feed.index');
        Route::get('feed/{id}', 'FeedController@show')->name('feed.show');
        Route::delete('feed/delete/{id}', 'FeedController@destroy')->name('feed.destroy');
        Route::get('profile', 'UserController@profile')->name('profile');
        Route::post('profile/update', 'UserController@updateProfile')->name('profile.update');
        Route::post('password/update', 'UserController@changePassword')->name('password.update');
        Route::get('entities', 'EntityController@index')->name('entities.index');
    });
    /*****
     * NLP Routes
     *****/
    Route::name('feed.')->prefix('feed')->group(function () {      
        
    });
});
Route::get('/ping-rosett', 'Generic\NLPController@pingRosett')->name('.update');
Route::get('/update/entities-sentinments', 'Generic\NLPController@updateEntityiesAndSentiment')->name('.update');
