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
Route::get('browse/{type}', array('as'=>'browse', 'uses'=>'SearchController@browse'));

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

Route::get('realtor-sale', array('as'=>'Parser-realtor', 'uses'=>'ParserRealtorController@index'));
Route::post('parser-realtor-save4', array('as'=>'parser-realtor-save4', 'uses'=>'ParseController@saveRentCity'));
Route::post('parser-realtor-save3', array('as'=>'parser-realtor-save3', 'uses'=>'ParseController@saveRent'));
Route::post('parser-realtor-save2', array('as'=>'parser-realtor-save2', 'uses'=>'ParseController@saveSale'));
Route::post('parser-realtor-save', array('as'=>'parser-realtor-save', 'uses'=>'ParseController@save'));
Route::get('Remax-agent-real-estate-skokie-hiring', array('as'=>'Remax-agent', 'uses'=>'RemaxAgentController@index'));
//
Route::get('North-Chicagoland-Homes-For-Sale', array('as'=>'North-Chicagoland', 'uses'=>'NorthChicagolandController@index'));

Route::get('Skokie-Homes-For-Sale', array('as'=>'Skokie-Homes-For-Sale', 'uses'=>'SkokieHomesForSaleController@index'));
Route::get('Morton-Grove-Homes-For-Sale', array('as'=>'Morton-Grove-Homes-For-Sale', 'uses'=>'MortonGroveHomesForSaleController@index'));
Route::get('Niles-Homes-For-Sale', array('as'=>'Niles-Homes-For-Sale', 'uses'=>'NilesHomesForSaleController@index'));
Route::get('Evanston-Homes-For-Sale', array('as'=>'Evanston-Homes-For-Sale', 'uses'=>'EvanstonHomesForSaleController@index'));
Route::get('Glenview-Homes-For-Sale', array('as'=>'Glenview-Homes-For-Sale', 'uses'=>'GlenviewHomesForSaleController@index'));
Route::get('North-Chicagoland-Rentals', array('as'=>'North-Chicagoland-Rentals', 'uses'=>'NorthChicagolandRentalsController@index'));
Route::get('Skokie-Rentals', array('as'=>'Skokie-Rentals', 'uses'=>'SkokieRentalsController@index'));
Route::get('Morton-Grove-Rentals', array('as'=>'Morton-Grove-Rentals', 'uses'=>'MortonGroveRentalsController@index'));
Route::get('Niles-Rentals', array('as'=>'Niles-Rentals', 'uses'=>'NilesRentalsController@index'));
Route::get('Evanston-Rentals', array('as'=>'Evanston-Rentals', 'uses'=>'EvanstonRentalsController@index'));
Route::get('Glenview-Rentals', array('as'=>'Glenview-Rentals', 'uses'=>'GlenviewRentalsController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Skokie-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Skokie-Il', 'uses'=>'SingleFamilyHomesForSaleInSkokieIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Morton-Grove-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Morton-Grove-Il', 'uses'=>'SingleFamilyHomesForSaleInMortonGroveIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Niles-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Niles-Il', 'uses'=>'SingleFamilyHomesForSaleInNilesIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Evanston-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Evanston-Il', 'uses'=>'SingleFamilyHomesForSaleInEvanstonIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Glenview-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Glenview-Il', 'uses'=>'SingleFamilyHomesForSaleInGlenviewIlController@index'));
Route::get('Condos-For-Sale-In-Skokie-Il', array('as'=>'Condos-For-Sale-In-Skokie-Il', 'uses'=>'CondosForSaleInSkokieIlController@index'));
Route::get('Condos-For-Sale-In-Morton-Grove-Il', array('as'=>'Condos-For-Sale-In-Morton-Grove-Il', 'uses'=>'CondosForSaleInMortonGroveIlController@index'));
Route::get('Condos-For-Sale-In-Niles-Il', array('as'=>'Condos-For-Sale-In-Niles-Il', 'uses'=>'CondosForSaleInNilesIlController@index'));
Route::get('Condos-For-Sale-In-Evanston-Il', array('as'=>'Condos-For-Sale-In-Evanston-Il', 'uses'=>'CondosForSaleInEvanstonIlController@index'));
Route::get('Condos-For-Sale-In-Glenview-Il', array('as'=>'Condos-For-Sale-In-Glenview-Il', 'uses'=>'CondosForSaleInGlenviewIlController@index'));
Route::get('Apartments-For-Rent-In-Skokie-Il', array('as'=>'Apartments-For-Rent-In-Skokie-Il', 'uses'=>'ApartmentsForRentInSkokieIlController@index'));
Route::get('Apartments-For-Rent-In-Molton-Grove-Il', array('as'=>'Apartments-For-Rent-In-Molton-Grove-Il', 'uses'=>'ApartmentsForRentInMoltonGroveIlController@index'));
Route::get('Apartments-For-Rent-In-Niles-Il', array('as'=>'Apartments-For-Rent-In-Niles-Il', 'uses'=>'ApartmentsForRentInNilesIlController@index'));
Route::get('Apartments-For-Rent-In-Evanston-Il', array('as'=>'Apartments-For-Rent-In-Evanston-Il', 'uses'=>'ApartmentsForRentInEvanstonIlController@index'));
Route::get('Apartments-For-Rent-In-Glenview-Il', array('as'=>'Apartments-For-Rent-In-Glenview-Il', 'uses'=>'ApartmentsForRentInGlenviewIlController@index'));
Route::get('Homes-For-Rent-In-Skokie-Il', array('as'=>'Homes-For-Rent-In-Skokie-Il', 'uses'=>'HomesForRentInSkokieIlController@index'));
Route::get('Homes-For-Rent-In-Morton-Grove-Il', array('as'=>'Homes-For-Rent-In-Morton-Grove-Il', 'uses'=>'HomesForRentInMortonGroveIlController@index'));
Route::get('Homes-For-Rent-In-Niles-Il', array('as'=>'Homes-For-Rent-In-Niles-Il', 'uses'=>'HomesForRentInNilesIlController@index'));
Route::get('Homes-For-Rent-In-Evanston-Il', array('as'=>'Homes-For-Rent-In-Evanston-Il', 'uses'=>'HomesForRentInEvanstonIlController@index'));
Route::get('Homes-For-Rent-In-Glenview-Il', array('as'=>'Homes-For-Rent-In-Glenview-Il', 'uses'=>'HomesForRentInGlenviewIlController@index'));
Route::get('Skokie-Homes-For-Sale', array('as'=>'Skokie-Homes-For-Sale', 'uses'=>'SkokieHomesForSaleController@index'));
Route::get('Morton-Grove-Homes-For-Sale', array('as'=>'Morton-Grove-Homes-For-Sale', 'uses'=>'MortonGroveHomesForSaleController@index'));
Route::get('Niles-Homes-For-Sale', array('as'=>'Niles-Homes-For-Sale', 'uses'=>'NilesHomesForSaleController@index'));
Route::get('Evanston-Homes-For-Sale', array('as'=>'Evanston-Homes-For-Sale', 'uses'=>'EvanstonHomesForSaleController@index'));
Route::get('Glenview-Homes-For-Sale', array('as'=>'Glenview-Homes-For-Sale', 'uses'=>'GlenviewHomesForSaleController@index'));
Route::get('North-Chicagoland-Rentals', array('as'=>'North-Chicagoland-Rentals', 'uses'=>'NorthChicagolandRentalsController@index'));
Route::get('Skokie-Rentals', array('as'=>'Skokie-Rentals', 'uses'=>'SkokieRentalsController@index'));
Route::get('Morton-Grove-Rentals', array('as'=>'Morton-Grove-Rentals', 'uses'=>'MortonGroveRentalsController@index'));
Route::get('Niles-Rentals', array('as'=>'Niles-Rentals', 'uses'=>'NilesRentalsController@index'));
Route::get('Evanston-Rentals', array('as'=>'Evanston-Rentals', 'uses'=>'EvanstonRentalsController@index'));
Route::get('Glenview-Rentals', array('as'=>'Glenview-Rentals', 'uses'=>'GlenviewRentalsController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Skokie-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Skokie-Il', 'uses'=>'SingleFamilyHomesForSaleInSkokieIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Morton-Grove-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Morton-Grove-Il', 'uses'=>'SingleFamilyHomesForSaleInMortonGroveIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Niles-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Niles-Il', 'uses'=>'SingleFamilyHomesForSaleInNilesIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Evanston-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Evanston-Il', 'uses'=>'SingleFamilyHomesForSaleInEvanstonIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Glenview-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Glenview-Il', 'uses'=>'SingleFamilyHomesForSaleInGlenviewIlController@index'));
Route::get('Condos-For-Sale-In-Skokie-Il', array('as'=>'Condos-For-Sale-In-Skokie-Il', 'uses'=>'CondosForSaleInSkokieIlController@index'));
Route::get('Condos-For-Sale-In-Morton-Grove-Il', array('as'=>'Condos-For-Sale-In-Morton-Grove-Il', 'uses'=>'CondosForSaleInMortonGroveIlController@index'));
Route::get('Condos-For-Sale-In-Niles-Il', array('as'=>'Condos-For-Sale-In-Niles-Il', 'uses'=>'CondosForSaleInNilesIlController@index'));
Route::get('Condos-For-Sale-In-Evanston-Il', array('as'=>'Condos-For-Sale-In-Evanston-Il', 'uses'=>'CondosForSaleInEvanstonIlController@index'));
Route::get('Condos-For-Sale-In-Glenview-Il', array('as'=>'Condos-For-Sale-In-Glenview-Il', 'uses'=>'CondosForSaleInGlenviewIlController@index'));
Route::get('Apartments-For-Rent-In-Skokie-Il', array('as'=>'Apartments-For-Rent-In-Skokie-Il', 'uses'=>'ApartmentsForRentInSkokieIlController@index'));
Route::get('Apartments-For-Rent-In-Molton-Grove-Il', array('as'=>'Apartments-For-Rent-In-Molton-Grove-Il', 'uses'=>'ApartmentsForRentInMoltonGroveIlController@index'));
Route::get('Apartments-For-Rent-In-Niles-Il', array('as'=>'Apartments-For-Rent-In-Niles-Il', 'uses'=>'ApartmentsForRentInNilesIlController@index'));
Route::get('Apartments-For-Rent-In-Evanston-Il', array('as'=>'Apartments-For-Rent-In-Evanston-Il', 'uses'=>'ApartmentsForRentInEvanstonIlController@index'));
Route::get('Apartments-For-Rent-In-Glenview-Il', array('as'=>'Apartments-For-Rent-In-Glenview-Il', 'uses'=>'ApartmentsForRentInGlenviewIlController@index'));
Route::get('Homes-For-Rent-In-Skokie-Il', array('as'=>'Homes-For-Rent-In-Skokie-Il', 'uses'=>'HomesForRentInSkokieIlController@index'));
Route::get('Homes-For-Rent-In-Morton-Grove-Il', array('as'=>'Homes-For-Rent-In-Morton-Grove-Il', 'uses'=>'HomesForRentInMortonGroveIlController@index'));
Route::get('Homes-For-Rent-In-Niles-Il', array('as'=>'Homes-For-Rent-In-Niles-Il', 'uses'=>'HomesForRentInNilesIlController@index'));
Route::get('Homes-For-Rent-In-Evanston-Il', array('as'=>'Homes-For-Rent-In-Evanston-Il', 'uses'=>'HomesForRentInEvanstonIlController@index'));
Route::get('Homes-For-Rent-In-Glenview-Il', array('as'=>'Homes-For-Rent-In-Glenview-Il', 'uses'=>'HomesForRentInGlenviewIlController@index'));
Route::get('Skokie-Homes-For-Sale', array('as'=>'Skokie-Homes-For-Sale', 'uses'=>'SkokieHomesForSaleController@index'));
Route::get('Morton-Grove-Homes-For-Sale', array('as'=>'Morton-Grove-Homes-For-Sale', 'uses'=>'MortonGroveHomesForSaleController@index'));
Route::get('Niles-Homes-For-Sale', array('as'=>'Niles-Homes-For-Sale', 'uses'=>'NilesHomesForSaleController@index'));
Route::get('Evanston-Homes-For-Sale', array('as'=>'Evanston-Homes-For-Sale', 'uses'=>'EvanstonHomesForSaleController@index'));
Route::get('Glenview-Homes-For-Sale', array('as'=>'Glenview-Homes-For-Sale', 'uses'=>'GlenviewHomesForSaleController@index'));
Route::get('North-Chicagoland-Rentals', array('as'=>'North-Chicagoland-Rentals', 'uses'=>'NorthChicagolandRentalsController@index'));
Route::get('Skokie-Rentals', array('as'=>'Skokie-Rentals', 'uses'=>'SkokieRentalsController@index'));
Route::get('Morton-Grove-Rentals', array('as'=>'Morton-Grove-Rentals', 'uses'=>'MortonGroveRentalsController@index'));
Route::get('Niles-Rentals', array('as'=>'Niles-Rentals', 'uses'=>'NilesRentalsController@index'));
Route::get('Evanston-Rentals', array('as'=>'Evanston-Rentals', 'uses'=>'EvanstonRentalsController@index'));
Route::get('Glenview-Rentals', array('as'=>'Glenview-Rentals', 'uses'=>'GlenviewRentalsController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Skokie-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Skokie-Il', 'uses'=>'SingleFamilyHomesForSaleInSkokieIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Morton-Grove-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Morton-Grove-Il', 'uses'=>'SingleFamilyHomesForSaleInMortonGroveIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Niles-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Niles-Il', 'uses'=>'SingleFamilyHomesForSaleInNilesIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Evanston-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Evanston-Il', 'uses'=>'SingleFamilyHomesForSaleInEvanstonIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Glenview-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Glenview-Il', 'uses'=>'SingleFamilyHomesForSaleInGlenviewIlController@index'));
Route::get('Condos-For-Sale-In-Skokie-Il', array('as'=>'Condos-For-Sale-In-Skokie-Il', 'uses'=>'CondosForSaleInSkokieIlController@index'));
Route::get('Condos-For-Sale-In-Morton-Grove-Il', array('as'=>'Condos-For-Sale-In-Morton-Grove-Il', 'uses'=>'CondosForSaleInMortonGroveIlController@index'));
Route::get('Condos-For-Sale-In-Niles-Il', array('as'=>'Condos-For-Sale-In-Niles-Il', 'uses'=>'CondosForSaleInNilesIlController@index'));
Route::get('Condos-For-Sale-In-Evanston-Il', array('as'=>'Condos-For-Sale-In-Evanston-Il', 'uses'=>'CondosForSaleInEvanstonIlController@index'));
Route::get('Condos-For-Sale-In-Glenview-Il', array('as'=>'Condos-For-Sale-In-Glenview-Il', 'uses'=>'CondosForSaleInGlenviewIlController@index'));
Route::get('Apartments-For-Rent-In-Skokie-Il', array('as'=>'Apartments-For-Rent-In-Skokie-Il', 'uses'=>'ApartmentsForRentInSkokieIlController@index'));
Route::get('Apartments-For-Rent-In-Molton-Grove-Il', array('as'=>'Apartments-For-Rent-In-Molton-Grove-Il', 'uses'=>'ApartmentsForRentInMoltonGroveIlController@index'));
Route::get('Apartments-For-Rent-In-Niles-Il', array('as'=>'Apartments-For-Rent-In-Niles-Il', 'uses'=>'ApartmentsForRentInNilesIlController@index'));
Route::get('Apartments-For-Rent-In-Evanston-Il', array('as'=>'Apartments-For-Rent-In-Evanston-Il', 'uses'=>'ApartmentsForRentInEvanstonIlController@index'));
Route::get('Apartments-For-Rent-In-Glenview-Il', array('as'=>'Apartments-For-Rent-In-Glenview-Il', 'uses'=>'ApartmentsForRentInGlenviewIlController@index'));
Route::get('Homes-For-Rent-In-Skokie-Il', array('as'=>'Homes-For-Rent-In-Skokie-Il', 'uses'=>'HomesForRentInSkokieIlController@index'));
Route::get('Homes-For-Rent-In-Morton-Grove-Il', array('as'=>'Homes-For-Rent-In-Morton-Grove-Il', 'uses'=>'HomesForRentInMortonGroveIlController@index'));
Route::get('Homes-For-Rent-In-Niles-Il', array('as'=>'Homes-For-Rent-In-Niles-Il', 'uses'=>'HomesForRentInNilesIlController@index'));
Route::get('Homes-For-Rent-In-Evanston-Il', array('as'=>'Homes-For-Rent-In-Evanston-Il', 'uses'=>'HomesForRentInEvanstonIlController@index'));
Route::get('Homes-For-Rent-In-Glenview-Il', array('as'=>'Homes-For-Rent-In-Glenview-Il', 'uses'=>'HomesForRentInGlenviewIlController@index'));
Route::get('Skokie-Homes-For-Sale', array('as'=>'Skokie-Homes-For-Sale', 'uses'=>'SkokieHomesForSaleController@index'));
Route::get('Morton-Grove-Homes-For-Sale', array('as'=>'Morton-Grove-Homes-For-Sale', 'uses'=>'MortonGroveHomesForSaleController@index'));
Route::get('Niles-Homes-For-Sale', array('as'=>'Niles-Homes-For-Sale', 'uses'=>'NilesHomesForSaleController@index'));
Route::get('Evanston-Homes-For-Sale', array('as'=>'Evanston-Homes-For-Sale', 'uses'=>'EvanstonHomesForSaleController@index'));
Route::get('Glenview-Homes-For-Sale', array('as'=>'Glenview-Homes-For-Sale', 'uses'=>'GlenviewHomesForSaleController@index'));
Route::get('North-Chicagoland-Rentals', array('as'=>'North-Chicagoland-Rentals', 'uses'=>'NorthChicagolandRentalsController@index'));
Route::get('Skokie-Rentals', array('as'=>'Skokie-Rentals', 'uses'=>'SkokieRentalsController@index'));
Route::get('Morton-Grove-Rentals', array('as'=>'Morton-Grove-Rentals', 'uses'=>'MortonGroveRentalsController@index'));
Route::get('Niles-Rentals', array('as'=>'Niles-Rentals', 'uses'=>'NilesRentalsController@index'));
Route::get('Evanston-Rentals', array('as'=>'Evanston-Rentals', 'uses'=>'EvanstonRentalsController@index'));
Route::get('Glenview-Rentals', array('as'=>'Glenview-Rentals', 'uses'=>'GlenviewRentalsController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Skokie-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Skokie-Il', 'uses'=>'SingleFamilyHomesForSaleInSkokieIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Morton-Grove-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Morton-Grove-Il', 'uses'=>'SingleFamilyHomesForSaleInMortonGroveIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Niles-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Niles-Il', 'uses'=>'SingleFamilyHomesForSaleInNilesIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Evanston-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Evanston-Il', 'uses'=>'SingleFamilyHomesForSaleInEvanstonIlController@index'));
Route::get('Single-Family-Homes-For-Sale-In-Glenview-Il', array('as'=>'Single-Family-Homes-For-Sale-In-Glenview-Il', 'uses'=>'SingleFamilyHomesForSaleInGlenviewIlController@index'));
Route::get('Condos-For-Sale-In-Skokie-Il', array('as'=>'Condos-For-Sale-In-Skokie-Il', 'uses'=>'CondosForSaleInSkokieIlController@index'));
Route::get('Condos-For-Sale-In-Morton-Grove-Il', array('as'=>'Condos-For-Sale-In-Morton-Grove-Il', 'uses'=>'CondosForSaleInMortonGroveIlController@index'));
Route::get('Condos-For-Sale-In-Niles-Il', array('as'=>'Condos-For-Sale-In-Niles-Il', 'uses'=>'CondosForSaleInNilesIlController@index'));
Route::get('Condos-For-Sale-In-Evanston-Il', array('as'=>'Condos-For-Sale-In-Evanston-Il', 'uses'=>'CondosForSaleInEvanstonIlController@index'));
Route::get('Condos-For-Sale-In-Glenview-Il', array('as'=>'Condos-For-Sale-In-Glenview-Il', 'uses'=>'CondosForSaleInGlenviewIlController@index'));
Route::get('Apartments-For-Rent-In-Skokie-Il', array('as'=>'Apartments-For-Rent-In-Skokie-Il', 'uses'=>'ApartmentsForRentInSkokieIlController@index'));
Route::get('Apartments-For-Rent-In-Molton-Grove-Il', array('as'=>'Apartments-For-Rent-In-Molton-Grove-Il', 'uses'=>'ApartmentsForRentInMoltonGroveIlController@index'));
Route::get('Apartments-For-Rent-In-Niles-Il', array('as'=>'Apartments-For-Rent-In-Niles-Il', 'uses'=>'ApartmentsForRentInNilesIlController@index'));
Route::get('Apartments-For-Rent-In-Evanston-Il', array('as'=>'Apartments-For-Rent-In-Evanston-Il', 'uses'=>'ApartmentsForRentInEvanstonIlController@index'));
Route::get('Apartments-For-Rent-In-Glenview-Il', array('as'=>'Apartments-For-Rent-In-Glenview-Il', 'uses'=>'ApartmentsForRentInGlenviewIlController@index'));
Route::get('Homes-For-Rent-In-Skokie-Il', array('as'=>'Homes-For-Rent-In-Skokie-Il', 'uses'=>'HomesForRentInSkokieIlController@index'));
Route::get('Homes-For-Rent-In-Morton-Grove-Il', array('as'=>'Homes-For-Rent-In-Morton-Grove-Il', 'uses'=>'HomesForRentInMortonGroveIlController@index'));
Route::get('Homes-For-Rent-In-Niles-Il', array('as'=>'Homes-For-Rent-In-Niles-Il', 'uses'=>'HomesForRentInNilesIlController@index'));
Route::get('Homes-For-Rent-In-Evanston-Il', array('as'=>'Homes-For-Rent-In-Evanston-Il', 'uses'=>'HomesForRentInEvanstonIlController@index'));
Route::get('Homes-For-Rent-In-Glenview-Il', array('as'=>'Homes-For-Rent-In-Glenview-Il', 'uses'=>'HomesForRentInGlenviewIlController@index'));