<?php

Route::group(['middleware' => 'admin.user','namespace' => 'admin', 'prefix' => 'admin'], function() {
    Route::get("/addmore","AdminController@addMore");
	Route::post("/addmore","AdminController@addMorePost");

	Route::resource('texnics-category','TexnicsCategoryController');
	Route::resource('texnics-subcategory','TexnicsSubcategoryController');

	Route::resource('user-inn','UserInnController');
	Route::post('user-inn/find','UserInnController@find');

	Route::resource('payments','PaymentController');
	Route::get('payments/list/{id}/{user_id?}','PaymentController@list');

	Route::resource('treaties','TreatyController');
	Route::get('treaties/list/{id}','TreatyController@list');

	Route::resource('question','QuestionController');
	Route::resource('answer','AnswerController');

	Route::resource('texnic','TexnicController');

	Route::post('texnicslist','TexnicController@texnicsList');

	Route::get('/params/{id}','TexnicController@params');
	Route::get("/params/delete/{id}","AdminController@delete");
	Route::get("/params/edit/{id}","AdminController@edit");

	Route::post("/subcategorylist","TexnicsSubcategoryController@list");
	Route::post("/citylist","CityController@list");
	
	Route::get('/online_order', 'OnlineOrderController@index');
	Route::resource('online-order', 'OnlineOrderController');
	Route::post('online-order/sort', 'OnlineOrderController@index1');
	Route::post('online-order/status', 'OnlineOrderController@status');


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
Route::get('/usefull-staff/{id}/more', 'UsefulUstafController@more');

Route::get('/texnics/{slug}/{id?}', 'LizingController@texnics');
Route::get('/category-texnics', 'LizingController@category');
Route::get('/texnics_more/{slug}', 'LizingController@more');

Route::get('/online_order', 'OnlineOrderController@index');
Route::get('/online_order/texnicsList', 'OnlineOrderController@texnicsList');

Route::get('/workers', 'WorkerController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/search', 'SearchController@index');

Route::get('/about', 'AboutController@index');

Route::get('/slider/{slug}', 'SliderController@more');

Route::get('/gerb', 'Controller@gerb');
Route::get('/flag', 'Controller@bayroq');
Route::post('/poll', 'Controller@poll');
Route::get('/anthem', 'Controller@madhiya');
Route::get('/calculator','Controller@calculator');
Route::get('/calculator/{id}','Controller@calculatorTexnic');

Route::resource('/question', 'QuestionController');

Route::post('/usercan','UserController@usercan');
Route::post('/inn_send','UserController@innSend');
Route::post('/sms_code/verify','UserController@smsVerify');
Route::post('/userInn/exit','UserController@chiqish');
Route::post('/user/paymentTable','UserController@paymentTable');
Route::get('/user/cabinet','UserController@userCabinet');


Route::get('/{slug}', 'PageController@page');


// Route::get('/table', function(){
// 	return view('table');
// });


Route::get('/lang/{lang}', function($lang=null){
	App::setLocale($lang);
	session(['lang'=>$lang]);
	return back();
});