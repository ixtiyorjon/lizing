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

Route::get('/', 'Controller@index');

Route::get('/news', 'NewsController@index');

Route::get('/news/more/{slug}', 'NewsController@new');

Route::get('/quest_answer', 'QuestAnswerController@index');

Route::get('/useful_ustafs', 'UsefulUstafController@index');

Route::get('/lizing_texnics', 'LizingController@index');

Route::get('/lizing_texnics2', 'LizingController@index2');

Route::get('/texnics_more', 'LizingController@more');

Route::get('/online_order', 'OnlineOrderController@index');

Route::get('/workers', 'WorkerController@index');

Route::get('/about', 'AboutController@index');

Route::get('/table', function(){
	return view('table');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/lang/{lang}', function($lang=null){
	App::setLocale($lang);
	session(['lang'=>$lang]);
	return back();
});