<!-- //LOCATION: remax/public 
-->
<?php
/* Parsing */
//Route::get('realtor-sale', array('as'=>'realtor-sale', 'uses'=>'ParseController@realtor_sale'));

/*----- Admin ---------*/

Route::get('admin-db', array('as'=>'admin-db', 'uses'=>'AdminController@index'));
Route::post('admin-db', array('as'=>'admin-db-store', 'uses'=>'AdminController@store'));


Route::get('about', array('as'=>'about', 'uses'=>'AboutController@index'));
Route::post('login', array('uses'=>'LoginController@index'));
Route::get('logout', array('as'=>'logout', 'uses'=>'LoginController@logout'));
Route::get('login-attempt', array('as'=>'login-errors', 'uses'=>'LoginController@fail'));

Route::get('panel', array('as'=>'panel', 'uses'=>'PanelController@index'));
Route::get('saved-homes', array('as'=>'saved-homes', 'uses'=>'PanelController@saved_homes'));

Route::get('user-edit/{id}', array('as'=>'user-edit', 'uses'=>'UserController@edit'));
Route::put('user-update', array('as'=>'user-update', 'uses'=>'UserController@update'));

Route::get('dream-home-request', array('as'=>'dream-home-request', 'uses'=>'DreamHomeController@request'));
Route::get('dream-home-request-management', array('as'=>'dream-home-request-management', 'uses'=>'DreamHomeController@manage'));
Route::post('dream-home-request', array('as'=>'my-dream-home-request', 'uses'=>'DreamHomeController@store'));

Route::get('dream-home-request-edit/{id}', array('as'=>'dream-home-request-edit', 'uses'=>'DreamHomeController@edit'));
Route::put('dream-home-request-update', array('as'=>'dream-home-request-update', 'uses'=>'DreamHomeController@update'));
Route::delete('dreamhomes/{id}/delete', array('as'=>'dreamhomes.delete', 'uses'=>'DreamHomeController@destroy'));

Route::post('house-alert/{house_id}', array('as'=>'house-alert', 'uses'=>'SearchController@alert_signup'));
Route::post('house-alert-remove/{house_id}', array('as'=>'house-alert-remove', 'uses'=>'SearchController@alert_signup_remove'));


Route::post('sign-up', array('uses'=>'LoginController@signup'));


Route::get('sign-up-attempt', array('as'=>'signup-errors', 'uses'=>'LoginController@signup_errors'));
/* =home */
Route::post('sendmail', array('uses'=>'MailController@index'));
Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));
Route::get('sendmail', array('as'=>'sendmail', 'uses'=>'EmailController@index'));
/* =about */


/* =news*/
Route::get('news/{id}', array('as'=>'news', 'uses'=>'NewsController@show'));
Route::get('real-estate-news', array('as'=>'real-estate-news', 'uses'=>'RealEstateNewsController@index'));
Route::get('news-for-buyers', array('as'=>'news-for-buyers', 'uses'=>'NewsForBuyersController@index'));
Route::get('news-for-sellers', array('as'=>'news-for-sellers', 'uses'=>'NewsForSellersController@index'));

/* =buying */
Route::get('buying-BuyingSkokie', array('as'=>'buying-BuyingSkokie', 'uses'=>'BuyingSkokie.Controller@index'));
<!-- //LOCATION: remax/public 
-->
<?php
/* Parsing */
//Route::get('realtor-sale', array('as'=>'realtor-sale', 'uses'=>'ParseController@realtor_sale'));

/*----- Admin ---------*/

Route::get('admin-db', array('as'=>'admin-db', 'uses'=>'AdminController@index'));
Route::post('admin-db', array('as'=>'admin-db-store', 'uses'=>'AdminController@store'));


Route::get('about', array('as'=>'about', 'uses'=>'AboutController@index'));
Route::post('login', array('uses'=>'LoginController@index'));
Route::get('logout', array('as'=>'logout', 'uses'=>'LoginController@logout'));
Route::get('login-attempt', array('as'=>'login-errors', 'uses'=>'LoginController@fail'));

Route::get('panel', array('as'=>'panel', 'uses'=>'PanelController@index'));
Route::get('saved-homes', array('as'=>'saved-homes', 'uses'=>'PanelController@saved_homes'));

Route::get('user-edit/{id}', array('as'=>'user-edit', 'uses'=>'UserController@edit'));
Route::put('user-update', array('as'=>'user-update', 'uses'=>'UserController@update'));

Route::get('dream-home-request', array('as'=>'dream-home-request', 'uses'=>'DreamHomeController@request'));
Route::get('dream-home-request-management', array('as'=>'dream-home-request-management', 'uses'=>'DreamHomeController@manage'));
Route::post('dream-home-request', array('as'=>'my-dream-home-request', 'uses'=>'DreamHomeController@store'));

Route::get('dream-home-request-edit/{id}', array('as'=>'dream-home-request-edit', 'uses'=>'DreamHomeController@edit'));
Route::put('dream-home-request-update', array('as'=>'dream-home-request-update', 'uses'=>'DreamHomeController@update'));
Route::delete('dreamhomes/{id}/delete', array('as'=>'dreamhomes.delete', 'uses'=>'DreamHomeController@destroy'));

Route::post('house-alert/{house_id}', array('as'=>'house-alert', 'uses'=>'SearchController@alert_signup'));
Route::post('house-alert-remove/{house_id}', array('as'=>'house-alert-remove', 'uses'=>'SearchController@alert_signup_remove'));


Route::post('sign-up', array('uses'=>'LoginController@signup'));


Route::get('sign-up-attempt', array('as'=>'signup-errors', 'uses'=>'LoginController@signup_errors'));
/* =home */
Route::post('sendmail', array('uses'=>'MailController@index'));
Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));
Route::get('sendmail', array('as'=>'sendmail', 'uses'=>'EmailController@index'));
/* =about */


/* =news*/
Route::get('news/{id}', array('as'=>'news', 'uses'=>'NewsController@show'));
Route::get('real-estate-news', array('as'=>'real-estate-news', 'uses'=>'RealEstateNewsController@index'));
Route::get('news-for-buyers', array('as'=>'news-for-buyers', 'uses'=>'NewsForBuyersController@index'));
Route::get('news-for-sellers', array('as'=>'news-for-sellers', 'uses'=>'NewsForSellersController@index'));

/* =buying */
