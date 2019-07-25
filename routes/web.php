<?php

Route::group(['middleware' => 'admin.user','namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get("/addmore","AdminController@addMore");
	Route::post("/addmore","AdminController@addMorePost");

	Route::resource('texnics-category','TexnicsCategoryController');
	Route::resource('texnics-subcategory','TexnicsSubcategoryController');
	Route::resource('texnic','TexnicController');

	Route::get('/params/{id}','TexnicController@params');
	Route::get("/params/delete/{id}","AdminController@delete");
	Route::get("/params/edit/{id}","AdminController@edit");

});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'Controller@index');

Route::post('/appeal', 'AppealController@appeal');

Route::get('/news', 'NewsController@index');

Route::get('/news/more/{slug}', 'NewsController@new');

Route::get('/quest_answer', 'QuestAnswerController@index');

Route::get('/useful_ustafs', 'UsefulUstafController@index');

Route::get('/texnics/{slug }', 'LizingController@texnics');

Route::get('/category-texnics', 'LizingController@category');

Route::get('/texnics_more', 'LizingController@more');

Route::get('/online_order', 'OnlineOrderController@index');

Route::get('/workers', 'WorkerController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/search', 'SearchController@index');

Route::get('/about', 'AboutController@index');

Route::get('/table', function(){
	return view('table');
});


Route::get('/lang/{lang}', function($lang=null){
	App::setLocale($lang);
	session(['lang'=>$lang]);
	return back();
});