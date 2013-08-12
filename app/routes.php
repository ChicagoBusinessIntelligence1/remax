<!-- //LOCATION: remax/public 
-->
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/', function()
//{
//	return View::make('hello');
//});
/* = Admin Panel */



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

Route::post('sendmail', array('uses'=>'EmailController@index'));

Route::get('about', array('as'=>'about', 'uses'=>'AboutController@index'));
// Route::get('parse', array('as'=>'parse', 'uses'=>'ParseController@index'));

/* =news*/
Route::get('news/{id}', array('as'=>'news', 'uses'=>'NewsController@show'));
Route::get('real_estate_news', array('as'=>'real_estate_news', 'uses'=>'RealEstateNewsController@index'));
Route::get('news-for-buyers', array('as'=>'news_for_buyers', 'uses'=>'NewsForBuyersController@index'));
Route::get('news-for-sellers', array('as'=>'news_for_sellers', 'uses'=>'NewsForSellersController@index'));

/* =buying */

Route::get('anatomy_of_a_home_purchase', array('as'=>'anatomy_of_a_home_purchase', 'uses'=>'Anatomy_of_a_home_purchaseController@index'));
Route::get('deciding_where_to_live', array('as'=>'deciding_where_to_live', 'uses'=>'Deciding_where_to_liveController@index'));
Route::get('five_tips_to_narrow_your_online_home_search', array('as'=>'five_tips_to_narrow_your_online_home_search', 'uses'=>'Five_tips_to_narrow_your_online_home_searchController@index'));
Route::get('the_benefits_of_home_ownership', array('as'=>'the_benefits_of_home_ownership', 'uses'=>'The_benefits_of_home_ownershipController@index'));
Route::get('the_importance_of_buyers_agent', array('as'=>'the_importance_of_buyers_agent', 'uses'=>'The_importance_of_buyers_agentController@index'));


/* =selling */

Route::get('consider_a_home_inspection_when_selling', array('as'=>'consider_a_home_inspection_when_selling', 'uses'=>'Consider_a_home_inspection_when_sellingController@index'));
Route::get('how_an_agent_markets_your_home', array('as'=>'how_an_agent_markets_your_home', 'uses'=>'How_an_agent_markets_your_homeController@index'));
Route::get('preparing_your_house_for_sale', array('as'=>'preparing_your_house_for_sale', 'uses'=>'Preparing_your_house_for_saleController@index'));
Route::get('pricing_your_home_to_sell', array('as'=>'pricing_your_home_to_sell', 'uses'=>'Pricing_your_home_to_sellController@index'));
Route::get('the_right_listing_agent', array('as'=>'the_right_listing_agent', 'uses'=>'The_right_listing_agentController@index'));


/* =mortgage */
Route::get('down_payments_how_much_do_you_need', array('as'=>'down_payments_how_much_do_you_need', 'uses'=>'Down_payments_how_much_do_you_needController@index'));
Route::get('finding_the_right_mortgage_professional', array('as'=>'finding_the_right_mortgage_professional', 'uses'=>'Finding_the_right_mortgage_professionalController@index'));
Route::get('getting_preapproved', array('as'=>'getting_preapproved', 'uses'=>'Getting_preapprovedController@index'));
Route::get('how_much_can_you_afford', array('as'=>'how_much_can_you_afford', 'uses'=>'How_much_can_you_affordController@index'));
Route::get('mortgages_101_basic_loan_types', array('as'=>'mortgages_101_basic_loan_types', 'uses'=>'Mortgages_101_basic_loan_typesController@index'));
Route::get('renovating_a_home', array('as'=>'renovating_a_home', 'uses'=>'Renovating_a_homeController@index'));


/* =contact */

Route::get('contact', array('as'=>'contact', 'uses'=>'ContactController@index'));
Route::post('login', array('as'=>'login', 'uses'=>'LoginController@index'));


Route::get('show-all-listings', 'SearchController@index');
Route::get('search', 'SearchController@index');
Route::get('search/{id}', 'SearchController@show');

/*  Browse db */
Route::get('browse/{type}', array('as'=>'browse', 'uses'=>'BrowseController@index'));

/* Agent listing */

Route::get('agent/{id}', 'AgentController@show_listings');
Route::get('agent-rentals/{id}', 'AgentController@show_rentals');
Route::get('all-agents', array('as'=>'allAgents', 'uses'=>'AgentController@all'));

/*  Renting  */
Route::get('rent', 'RentController@index');
Route::get('rent/{id}', 'RentController@show');
Route::get('rent-apartments', 'RentController@apartments');
Route::get('rent-houses', 'RentController@houses');
Route::get('all-rent-listings', 'RentController@all');