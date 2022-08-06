<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('get-feed', 'Admin\FeedController@index')->name('get.feed');
Route::any('add-feed', 'Admin\FeedController@addFeeds')->name('add.feed');
Route::middleware('auth')->prefix('user')->namespace('User')->name('user.')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/project/{project}', 'ProjectController@index')->name('project');
    Route::post('/add-project', 'DashboardController@addProject')->name('add.project');
    Route::any('project/{id}/delete', 'ProjectController@destroy')->name('project.destroy');
    Route::any('entities/all', 'EntityController@index')->name('entities');
});


Route::middleware('auth')->namespace('User')->prefix('api')->name('user.')->group(function () {
    Route::get('/get-saved-filter-listing','FilterController@getSavedFilterListing');
    Route::get('/get-projects-list','ProjectController@getProjectsList');
    Route::post('/search-filters', 'FeedController@searchFilter');
    Route::any('/get-feed-listing','FeedController@feedListing');
});


Route::middleware('auth')->namespace('User')->name('user.')->group(function () {
    Route::get('/api/filter-listing', 'FilterController@filterListing');
    Route::post('/api/add-filters', 'FilterController@addFilter')->name('add.filter');
    Route::get('/api/get-filters', 'FilterController@index')->name('filters.index');
    Route::get('/api/get-entities', 'EntityController@entities');
});
Route::namespace('Octoparse')->name('octoparse')->group(function (){
    Route::get('/api/get-access-token','OctoparseController@getAccessToken');
    Route::get('/api/refresh-token/{token}','OctoparseController@refreshToken');
    Route::get('/api/get-all-task-groups-listing/{token}','OctoparseController@getAllTaskGroups');
    Route::get('/api/get-all-tasks-listing-by-group/{token}','OctoparseController@getListAllTasksByGroup');
    Route::get('/api/get-status-of-tasks','OctoparseController@tasksStatus');
    Route::get('/api/start-task','OctoparseController@startGroupTask');
    Route::get('/api/stop-task','OctoparseController@stopTask');
    Route::get('/api/get-non-export-data','OctoparseController@getNonExportData');
    Route::get('/api/get-data-of-task-by-offset','OctoparseController@getDataOfTaskByOffset');
    Route::get('/api/update-data-exported','OctoparseController@updateDataExported');
    Route::get('/api/remove-task-data','OctoparseController@removeTaskData');
    Route::get('/dispatch-group-job','OctoparseController@dispatchGroupJob');
});
