<!-- //LOCATION: remax/public 
-->
<?php
/* Parsing */
//Route::get('realtor-sale', array('as'=>'realtor-sale', 'uses'=>'ParseController@realtor_sale'));

/*----- Admin ---------*/

Route::get('admin-db', array('as'=>'admin-db', 'uses'=>'AdminController@index'));
Route::post('admin-db', array('as'=>'admin-db-store', 'uses'=>'AdminController@store'));


Route::get('about', array('as'=>'about', 'uses'=>'AboutController@index'));
Route::get('homes-sale-skokie-il', array('as'=>'homes-sale-skokie-il', 'uses'=>'SeoController@home_sale_skokie'));

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

Route::get('anatomy-of-a-home-purchase', array('as'=>'anatomy-of-a-home-purchase', 'uses'=>'Anatomy_of_a_home_purchaseController@index'));
Route::get('deciding-where-to-live', array('as'=>'deciding-where-to-live', 'uses'=>'Deciding_where_to_liveController@index'));
Route::get('five-tips-to-narrow-your-online-home-search', array('as'=>'five-tips-to-narrow-your-online-home-search', 'uses'=>'Five_tips_to_narrow_your_online_home_searchController@index'));
Route::get('the-benefits-of-home-ownership', array('as'=>'the-benefits-of-home-ownership', 'uses'=>'The_benefits_of_home_ownershipController@index'));
Route::get('the-importance-of-buyers-agent', array('as'=>'the-importance-of-buyers-agent', 'uses'=>'The_importance_of_buyers_agentController@index'));


/* =selling */

Route::get('consider-a-home-inspection-when-selling', array('as'=>'consider-a-home-inspection-when-selling', 'uses'=>'Consider_a_home_inspection_when_sellingController@index'));
Route::get('how-an-agent-markets-your-home', array('as'=>'how-an-agent-markets-your-home', 'uses'=>'How_an_agent_markets_your_homeController@index'));
Route::get('preparing-your-house-for-sale', array('as'=>'preparing-your-house-for-sale', 'uses'=>'Preparing_your_house_for_saleController@index'));
Route::get('pricing-your-home-to-sell', array('as'=>'pricing-your-home-to-sell', 'uses'=>'Pricing_your_home_to_sellController@index'));
Route::get('the-right-listing-agent', array('as'=>'the-right-listing-agent', 'uses'=>'The_right_listing_agentController@index'));


/* =mortgage */
Route::get('down-payments-how-much-do-you-need', array('as'=>'down-payments-how-much-do-you-need', 'uses'=>'Down_payments_how_much_do_you_needController@index'));
Route::get('finding-the-right-mortgage-professional', array('as'=>'finding-the-right-mortgage-professional', 'uses'=>'Finding_the_right_mortgage_professionalController@index'));
Route::get('getting-preapproved', array('as'=>'getting-preapproved', 'uses'=>'Getting_preapprovedController@index'));
Route::get('how-much-can-you-afford', array('as'=>'how-much-can-you-afford', 'uses'=>'How_much_can_you_affordController@index'));
Route::get('mortgages-101-basic-loan-types', array('as'=>'mortgages-101-basic-loan-types', 'uses'=>'Mortgages_101_basic_loan_typesController@index'));
Route::get('renovating-a-home', array('as'=>'renovating-a-home', 'uses'=>'Renovating_a_homeController@index'));


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
Route::get('all-rent-listings', array('as'=>'all-rent-listings', 'uses'=>'RentController@all'));

Route::get('Evanston-township-high-school', array('as'=>'Evanston-township', 'uses'=>'EvanstonTownshipController@index'));
Route::get('realtor-sale', array('as'=>'Parser-realtor', 'uses'=>'ParserRealtorController@index'));
Route::post('parser-realtor-save', array('as'=>'parser-realtor-save', 'uses'=>'ParseController@save'));
Route::get('Remax-agent-real-estate-skokie-hiring', array('as'=>'Remax-agent', 'uses'=>'RemaxAgentController@index'));