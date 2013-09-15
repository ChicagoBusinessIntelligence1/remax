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

/* =location */
Route::get('Lake-Forest-Real-Estate-Listings', array('as'=>'lake-forest-lists', 'uses'=>'LakeForestRealEstateController@index'));
Route::get('Lake-Forest-Houses-Sale-60045', array('as'=>'lake-forest-houses-sale-60045', 'uses'=>'LakeForestRealEstateController@sale_60045'));
Route::get('Lake-Forest-Single-Families-Homes-Sale', array('as'=>'lake-forest-single-families-sale', 'uses'=>'LakeForestRealEstateController@sale_single_fam'));
Route::get('Lake-Forest-Condos-Sale', array('as'=>'lake-forest-condos-sale', 'uses'=>'LakeForestRealEstateController@sale_condos'));
Route::get('Lake-Forest-Single-Families-Homes-Sale', array('as'=>'lake-forest-single-families-sale', 'uses'=>'LakeForestRealEstateController@sale_single_fam'));
Route::get('Lake-Forest-Condos-Sale', array('as'=>'lake-forest-condos-sale', 'uses'=>'LakeForestRealEstateController@sale_condos'));
Route::get('Lake-Forest-Rentals-60045', array('as'=>'lake-forest-houses-rent-60045', 'uses'=>'LakeForestRealEstateController@rent_60045'));
Route::get('Lake-Forest-Apartments-for-Rent', array('as'=>'lake-forest-apartments-rent', 'uses'=>'LakeForestRealEstateController@rent_apartments'));
Route::get('Lake-Forest-Houses-for-Rent', array('as'=>'lake-forest-houses-rent', 'uses'=>'LakeForestRealEstateController@rent_houses'));

Route::get('Winnetka-Real-Estate-Listings', array('as'=>'winnetka-lists', 'uses'=>'WinnetkaRealEstateController@index'));
Route::get('Winnetka-Houses-Sale-60093', array('as'=>'winnetka-houses-sale-60093', 'uses'=>'WinnetkaRealEstateController@sale_60093'));
Route::get('Winnetka-Single-Families-Homes-Sale', array('as'=>'winnetka-single-families-sale', 'uses'=>'WinnetkaRealEstateController@sale_single_fam'));
Route::get('Winnetka-Condos-Sale', array('as'=>'winnetka-condos-sale', 'uses'=>'WinnetkaRealEstateController@sale_condos'));
Route::get('Winnetka-Single-Families-Homes-Sale', array('as'=>'winnetka-single-families-sale', 'uses'=>'WinnetkaRealEstateController@sale_single_fam'));
Route::get('Winnetka-Condos-Sale', array('as'=>'winnetka-condos-sale', 'uses'=>'WinnetkaRealEstateController@sale_condos'));
Route::get('Winnetka-Rentals-60093', array('as'=>'winnetka-houses-rent-60093', 'uses'=>'WinnetkaRealEstateController@rent_60093'));
Route::get('Winnetka-Apartments-for-Rent', array('as'=>'winnetka-apartments-rent', 'uses'=>'WinnetkaRealEstateController@rent_apartments'));
Route::get('Winnetka-Houses-for-Rent', array('as'=>'winnetka-houses-rent', 'uses'=>'WinnetkaRealEstateController@rent_houses'));

Route::get('Wilmette-Real-Estate-Listings', array('as'=>'wilmette-lists', 'uses'=>'WilmetteRealEstateController@index'));
Route::get('Wilmette-Houses-Sale-60091', array('as'=>'wilmette-houses-sale-60091', 'uses'=>'WilmetteRealEstateController@sale_60091'));
Route::get('Wilmette-Single-Families-Homes-Sale', array('as'=>'wilmette-single-families-sale', 'uses'=>'WilmetteRealEstateController@sale_single_fam'));
Route::get('Wilmette-Condos-Sale', array('as'=>'wilmette-condos-sale', 'uses'=>'WilmetteRealEstateController@sale_condos'));
Route::get('Wilmette-Single-Families-Homes-Sale', array('as'=>'wilmette-single-families-sale', 'uses'=>'WilmetteRealEstateController@sale_single_fam'));
Route::get('Wilmette-Condos-Sale', array('as'=>'wilmette-condos-sale', 'uses'=>'WilmetteRealEstateController@sale_condos'));
Route::get('Wilmette-Rentals-60091', array('as'=>'wilmette-houses-rent-60091', 'uses'=>'WilmetteRealEstateController@rent_60091'));
Route::get('Wilmette-Apartments-for-Rent', array('as'=>'wilmette-apartments-rent', 'uses'=>'WilmetteRealEstateController@rent_apartments'));
Route::get('Wilmette-Houses-for-Rent', array('as'=>'wilmette-houses-rent', 'uses'=>'WilmetteRealEstateController@rent_houses'));

Route::get('Lincolnwood-Real-Estate-Listings', array('as'=>'lincolnwood-lists', 'uses'=>'LincolnwoodRealEstateController@index'));
Route::get('Lincolnwood-Houses-Sale-60712', array('as'=>'lincolnwood-houses-sale-60712', 'uses'=>'LincolnwoodRealEstateController@sale_60712'));
Route::get('Lincolnwood-Houses-Sale-60645', array('as'=>'lincolnwood-houses-sale-60645', 'uses'=>'LincolnwoodRealEstateController@sale_60645'));
Route::get('Lincolnwood-Single-Families-Homes-Sale', array('as'=>'lincolnwood-single-families-sale', 'uses'=>'LincolnwoodRealEstateController@sale_single_fam'));
Route::get('Lincolnwood-Condos-Sale', array('as'=>'lincolnwood-condos-sale', 'uses'=>'LincolnwoodRealEstateController@sale_condos'));
Route::get('Lincolnwood-Single-Families-Homes-Sale', array('as'=>'lincolnwood-single-families-sale', 'uses'=>'LincolnwoodRealEstateController@sale_single_fam'));
Route::get('Lincolnwood-Condos-Sale', array('as'=>'lincolnwood-condos-sale', 'uses'=>'LincolnwoodRealEstateController@sale_condos'));
Route::get('Lincolnwood-Rentals-60712', array('as'=>'lincolnwood-houses-rent-60712', 'uses'=>'LincolnwoodRealEstateController@rent_60712'));
Route::get('Lincolnwood-Apartments-for-Rent', array('as'=>'lincolnwood-apartments-rent', 'uses'=>'LincolnwoodRealEstateController@rent_apartments'));
Route::get('Lincolnwood-Houses-for-Rent', array('as'=>'lincolnwood-houses-rent', 'uses'=>'LincolnwoodRealEstateController@rent_houses'));

Route::get('Park-Ridge-Real-Estate-Listings', array('as'=>'park-ridge-lists', 'uses'=>'ParkRidgeRealEstateController@index'));
Route::get('Park-Ridge-Houses-Sale-60068', array('as'=>'park-ridge-houses-sale-60068', 'uses'=>'ParkRidgeRealEstateController@sale_60068'));
Route::get('Park-Ridge-Single-Families-Homes-Sale', array('as'=>'park-ridge-single-families-sale', 'uses'=>'ParkRidgeRealEstateController@sale_single_fam'));
Route::get('Park-Ridge-Condos-Sale', array('as'=>'park-ridge-condos-sale', 'uses'=>'ParkRidgeRealEstateController@sale_condos'));
Route::get('Park-Ridge-Single-Families-Homes-Sale', array('as'=>'park-ridge-single-families-sale', 'uses'=>'ParkRidgeRealEstateController@sale_single_fam'));
Route::get('Park-Ridge-Condos-Sale', array('as'=>'park-ridge-condos-sale', 'uses'=>'ParkRidgeRealEstateController@sale_condos'));
Route::get('Park-Ridge-Rentals-60068', array('as'=>'park-ridge-houses-rent-60068', 'uses'=>'ParkRidgeRealEstateController@rent_60068'));
Route::get('Park-Ridge-Apartments-for-Rent', array('as'=>'park-ridge-apartments-rent', 'uses'=>'ParkRidgeRealEstateController@rent_apartments'));
Route::get('Park-Ridge-Houses-for-Rent', array('as'=>'park-ridge-houses-rent', 'uses'=>'ParkRidgeRealEstateController@rent_houses'));

Route::get('Glenview-Real-Estate-Listings', array('as'=>'glenview-lists', 'uses'=>'GlenviewRealEstateController@index'));
Route::get('Glenview-Houses-Sale-60025', array('as'=>'glenview-houses-sale-60025', 'uses'=>'GlenviewRealEstateController@sale_60025'));
Route::get('Glenview-Houses-Sale-60026', array('as'=>'glenview-houses-sale-60026', 'uses'=>'GlenviewRealEstateController@sale_60026'));
Route::get('Glenview-Single-Families-Homes-Sale', array('as'=>'glenview-single-families-sale', 'uses'=>'GlenviewRealEstateController@sale_single_fam'));
Route::get('Glenview-Condos-Sale', array('as'=>'glenview-condos-sale', 'uses'=>'GlenviewRealEstateController@sale_condos'));
Route::get('Glenview-Single-Families-Homes-Sale', array('as'=>'glenview-single-families-sale', 'uses'=>'GlenviewRealEstateController@sale_single_fam'));
Route::get('Glenview-Condos-Sale', array('as'=>'glenview-condos-sale', 'uses'=>'GlenviewRealEstateController@sale_condos'));
Route::get('Glenview-Rentals-60026', array('as'=>'glenview-houses-rent-60026', 'uses'=>'GlenviewRealEstateController@rent_60026'));
Route::get('Glenview-Rentals-60025', array('as'=>'glenview-houses-rent-60025', 'uses'=>'GlenviewRealEstateController@rent_60025'));
Route::get('Glenview-Apartments-for-Rent', array('as'=>'glenview-apartments-rent', 'uses'=>'GlenviewRealEstateController@rent_apartments'));
Route::get('Glenview-Houses-for-Rent', array('as'=>'glenview-houses-rent', 'uses'=>'GlenviewRealEstateController@rent_houses'));

Route::get('Morton-Grove-Real-Estate-Listings', array('as'=>'morton-grove-lists', 'uses'=>'MortonGroveRealEstateController@index'));
Route::get('Morton-Grove-Houses-Sale-60053', array('as'=>'morton-grove-houses-sale-60053', 'uses'=>'MortonGroveRealEstateController@sale_60053'));
Route::get('Morton-Grove-Single-Families-Homes-Sale', array('as'=>'morton-grove-single-families-sale', 'uses'=>'MortonGroveRealEstateController@sale_single_fam'));
Route::get('Morton-Grove-Condos-Sale', array('as'=>'morton-grove-condos-sale', 'uses'=>'MortonGroveRealEstateController@sale_condos'));
Route::get('Morton-Grove-Single-Families-Homes-Sale', array('as'=>'morton-grove-single-families-sale', 'uses'=>'MortonGroveRealEstateController@sale_single_fam'));
Route::get('Morton-Grove-Condos-Sale', array('as'=>'morton-grove-condos-sale', 'uses'=>'MortonGroveRealEstateController@sale_condos'));
Route::get('Morton-Grove-Rentals-60053', array('as'=>'morton-grove-houses-rent-60053', 'uses'=>'MortonGroveRealEstateController@rent_60053'));
Route::get('Morton-Grove-Apartments-for-Rent', array('as'=>'morton-grove-apartments-rent', 'uses'=>'MortonGroveRealEstateController@rent_apartments'));
Route::get('Morton-Grove-Houses-for-Rent', array('as'=>'morton-grove-houses-rent', 'uses'=>'MortonGroveRealEstateController@rent_houses'));

Route::get('Evanston-Real-Estate-Listings', array('as'=>'evanston-lists', 'uses'=>'EvanstonRealEstateController@index'));
Route::get('Evanston-Houses-Sale-60201', array('as'=>'evanston-houses-sale-60201', 'uses'=>'EvanstonRealEstateController@sale_60201'));
Route::get('Evanston-Houses-Sale-60202', array('as'=>'evanston-houses-sale-60202', 'uses'=>'EvanstonRealEstateController@sale_60202'));
Route::get('Evanston-Houses-Sale-60203', array('as'=>'evanston-houses-sale-60203', 'uses'=>'EvanstonRealEstateController@sale_60203'));
Route::get('Evanston-Single-Families-Homes-Sale', array('as'=>'evanston-single-families-sale', 'uses'=>'EvanstonRealEstateController@sale_single_fam'));
Route::get('Evanston-Condos-Sale', array('as'=>'evanston-condos-sale', 'uses'=>'EvanstonRealEstateController@sale_condos'));
Route::get('Evanston-Single-Families-Homes-Sale', array('as'=>'evanston-single-families-sale', 'uses'=>'EvanstonRealEstateController@sale_single_fam'));
Route::get('Evanston-Condos-Sale', array('as'=>'evanston-condos-sale', 'uses'=>'EvanstonRealEstateController@sale_condos'));
Route::get('Evanston-Rentals-60201', array('as'=>'evanston-houses-rent-60201', 'uses'=>'EvanstonRealEstateController@rent_60201'));
Route::get('Evanston-Rentals-60202', array('as'=>'evanston-houses-rent-60202', 'uses'=>'EvanstonRealEstateController@rent_60202'));
Route::get('Evanston-Apartments-for-Rent', array('as'=>'evanston-apartments-rent', 'uses'=>'EvanstonRealEstateController@rent_apartments'));
Route::get('Evanston-Houses-for-Rent', array('as'=>'evanston-houses-rent', 'uses'=>'EvanstonRealEstateController@rent_houses'));

Route::get('Niles-Real-Estate-Listings', array('as'=>'niles-lists', 'uses'=>'NilesRealEstateController@index'));
Route::get('Niles-Houses-Sale-60714', array('as'=>'niles-houses-sale-60714', 'uses'=>'NilesRealEstateController@sale_60714'));
Route::get('Niles-Single-Families-Homes-Sale', array('as'=>'niles-single-families-sale', 'uses'=>'NilesRealEstateController@sale_single_fam'));
Route::get('Niles-Condos-Sale', array('as'=>'niles-condos-sale', 'uses'=>'NilesRealEstateController@sale_condos'));
Route::get('Niles-Single-Families-Homes-Sale', array('as'=>'niles-single-families-sale', 'uses'=>'NilesRealEstateController@sale_single_fam'));
Route::get('Niles-Condos-Sale', array('as'=>'niles-condos-sale', 'uses'=>'NilesRealEstateController@sale_condos'));
Route::get('Niles-Rentals-60714', array('as'=>'niles-houses-rent-60714', 'uses'=>'NilesRealEstateController@rent_60714'));
Route::get('Niles-Apartments-for-Rent', array('as'=>'niles-apartments-rent', 'uses'=>'NilesRealEstateController@rent_apartments'));
Route::get('Niles-Houses-for-Rent', array('as'=>'niles-houses-rent', 'uses'=>'NilesRealEstateController@rent_houses'));

Route::get('Skokie-Real-Estate-Listings', array('as'=>'skokie-lists', 'uses'=>'SkokieRealEstateController@index'));
Route::get('Skokie-Houses-Sale-60077', array('as'=>'skokie-houses-sale-60077', 'uses'=>'SkokieRealEstateController@sale_60077'));
Route::get('Skokie-Houses-Sale-60076', array('as'=>'skokie-houses-sale-60076', 'uses'=>'SkokieRealEstateController@sale_60076'));
Route::get('Skokie-Houses-Sale-60203', array('as'=>'skokie-houses-sale-60203', 'uses'=>'SkokieRealEstateController@sale_60203'));
Route::get('Skokie-Single-Families-Homes-Sale', array('as'=>'skokie-single-families-sale', 'uses'=>'SkokieRealEstateController@sale_single_fam'));
Route::get('Skokie-Condos-Sale', array('as'=>'skokie-condos-sale', 'uses'=>'SkokieRealEstateController@sale_condos'));
Route::get('Skokie-Single-Families-Homes-Sale', array('as'=>'skokie-single-families-sale', 'uses'=>'SkokieRealEstateController@sale_single_fam'));
Route::get('Skokie-Condos-Sale', array('as'=>'skokie-condos-sale', 'uses'=>'SkokieRealEstateController@sale_condos'));
Route::get('Skokie-Rentals-60077', array('as'=>'skokie-houses-rent-60077', 'uses'=>'SkokieRealEstateController@rent_60077'));
Route::get('Skokie-Rentals-60076', array('as'=>'skokie-houses-rent-60076', 'uses'=>'SkokieRealEstateController@rent_60076'));
Route::get('Skokie-Apartments-for-Rent', array('as'=>'skokie-apartments-rent', 'uses'=>'SkokieRealEstateController@rent_apartments'));
Route::get('Skokie-Houses-for-Rent', array('as'=>'skokie-houses-rent', 'uses'=>'SkokieRealEstateController@rent_houses'));

Route::get('Lake-Forest-Real-Estate-Listings', array('as'=>'lake-forest-lists', 'uses'=>'LakeForestRealEstateController@index'));
Route::get('Lake-Forest-Houses-Sale-60045', array('as'=>'lake-forest-houses-sale-60045', 'uses'=>'LakeForestRealEstateController@sale_60045'));
Route::get('Lake-Forest-Single-Families-Homes-Sale', array('as'=>'lake-forest-single-families-sale', 'uses'=>'LakeForestRealEstateController@sale_single_fam'));
Route::get('Lake-Forest-Condos-Sale', array('as'=>'lake-forest-condos-sale', 'uses'=>'LakeForestRealEstateController@sale_condos'));
Route::get('Lake-Forest-Single-Families-Homes-Sale', array('as'=>'lake-forest-single-families-sale', 'uses'=>'LakeForestRealEstateController@sale_single_fam'));
Route::get('Lake-Forest-Condos-Sale', array('as'=>'lake-forest-condos-sale', 'uses'=>'LakeForestRealEstateController@sale_condos'));
Route::get('Lake-Forest-Rentals-60045', array('as'=>'lake-forest-houses-rent-60045', 'uses'=>'LakeForestRealEstateController@rent_60045'));
Route::get('Lake-Forest-Apartments-for-Rent', array('as'=>'lake-forest-apartments-rent', 'uses'=>'LakeForestRealEstateController@rent_apartments'));
Route::get('Lake-Forest-Houses-for-Rent', array('as'=>'lake-forest-houses-rent', 'uses'=>'LakeForestRealEstateController@rent_houses'));

Route::get('Winnetka-Real-Estate-Listings', array('as'=>'winnetka-lists', 'uses'=>'WinnetkaRealEstateController@index'));
Route::get('Winnetka-Houses-Sale-60093', array('as'=>'winnetka-houses-sale-60093', 'uses'=>'WinnetkaRealEstateController@sale_60093'));
Route::get('Winnetka-Single-Families-Homes-Sale', array('as'=>'winnetka-single-families-sale', 'uses'=>'WinnetkaRealEstateController@sale_single_fam'));
Route::get('Winnetka-Condos-Sale', array('as'=>'winnetka-condos-sale', 'uses'=>'WinnetkaRealEstateController@sale_condos'));
Route::get('Winnetka-Single-Families-Homes-Sale', array('as'=>'winnetka-single-families-sale', 'uses'=>'WinnetkaRealEstateController@sale_single_fam'));
Route::get('Winnetka-Condos-Sale', array('as'=>'winnetka-condos-sale', 'uses'=>'WinnetkaRealEstateController@sale_condos'));
Route::get('Winnetka-Rentals-60093', array('as'=>'winnetka-houses-rent-60093', 'uses'=>'WinnetkaRealEstateController@rent_60093'));
Route::get('Winnetka-Apartments-for-Rent', array('as'=>'winnetka-apartments-rent', 'uses'=>'WinnetkaRealEstateController@rent_apartments'));
Route::get('Winnetka-Houses-for-Rent', array('as'=>'winnetka-houses-rent', 'uses'=>'WinnetkaRealEstateController@rent_houses'));

Route::get('Wilmette-Real-Estate-Listings', array('as'=>'wilmette-lists', 'uses'=>'WilmetteRealEstateController@index'));
Route::get('Wilmette-Houses-Sale-60091', array('as'=>'wilmette-houses-sale-60091', 'uses'=>'WilmetteRealEstateController@sale_60091'));
Route::get('Wilmette-Single-Families-Homes-Sale', array('as'=>'wilmette-single-families-sale', 'uses'=>'WilmetteRealEstateController@sale_single_fam'));
Route::get('Wilmette-Condos-Sale', array('as'=>'wilmette-condos-sale', 'uses'=>'WilmetteRealEstateController@sale_condos'));
Route::get('Wilmette-Single-Families-Homes-Sale', array('as'=>'wilmette-single-families-sale', 'uses'=>'WilmetteRealEstateController@sale_single_fam'));
Route::get('Wilmette-Condos-Sale', array('as'=>'wilmette-condos-sale', 'uses'=>'WilmetteRealEstateController@sale_condos'));
Route::get('Wilmette-Rentals-60091', array('as'=>'wilmette-houses-rent-60091', 'uses'=>'WilmetteRealEstateController@rent_60091'));
Route::get('Wilmette-Apartments-for-Rent', array('as'=>'wilmette-apartments-rent', 'uses'=>'WilmetteRealEstateController@rent_apartments'));
Route::get('Wilmette-Houses-for-Rent', array('as'=>'wilmette-houses-rent', 'uses'=>'WilmetteRealEstateController@rent_houses'));

Route::get('Lincolnwood-Real-Estate-Listings', array('as'=>'lincolnwood-lists', 'uses'=>'LincolnwoodRealEstateController@index'));
Route::get('Lincolnwood-Houses-Sale-60712', array('as'=>'lincolnwood-houses-sale-60712', 'uses'=>'LincolnwoodRealEstateController@sale_60712'));
Route::get('Lincolnwood-Houses-Sale-60645', array('as'=>'lincolnwood-houses-sale-60645', 'uses'=>'LincolnwoodRealEstateController@sale_60645'));
Route::get('Lincolnwood-Single-Families-Homes-Sale', array('as'=>'lincolnwood-single-families-sale', 'uses'=>'LincolnwoodRealEstateController@sale_single_fam'));
Route::get('Lincolnwood-Condos-Sale', array('as'=>'lincolnwood-condos-sale', 'uses'=>'LincolnwoodRealEstateController@sale_condos'));
Route::get('Lincolnwood-Single-Families-Homes-Sale', array('as'=>'lincolnwood-single-families-sale', 'uses'=>'LincolnwoodRealEstateController@sale_single_fam'));
Route::get('Lincolnwood-Condos-Sale', array('as'=>'lincolnwood-condos-sale', 'uses'=>'LincolnwoodRealEstateController@sale_condos'));
Route::get('Lincolnwood-Rentals-60712', array('as'=>'lincolnwood-houses-rent-60712', 'uses'=>'LincolnwoodRealEstateController@rent_60712'));
Route::get('Lincolnwood-Apartments-for-Rent', array('as'=>'lincolnwood-apartments-rent', 'uses'=>'LincolnwoodRealEstateController@rent_apartments'));
Route::get('Lincolnwood-Houses-for-Rent', array('as'=>'lincolnwood-houses-rent', 'uses'=>'LincolnwoodRealEstateController@rent_houses'));

Route::get('Park-Ridge-Real-Estate-Listings', array('as'=>'park-ridge-lists', 'uses'=>'ParkRidgeRealEstateController@index'));
Route::get('Park-Ridge-Houses-Sale-60068', array('as'=>'park-ridge-houses-sale-60068', 'uses'=>'ParkRidgeRealEstateController@sale_60068'));
Route::get('Park-Ridge-Single-Families-Homes-Sale', array('as'=>'park-ridge-single-families-sale', 'uses'=>'ParkRidgeRealEstateController@sale_single_fam'));
Route::get('Park-Ridge-Condos-Sale', array('as'=>'park-ridge-condos-sale', 'uses'=>'ParkRidgeRealEstateController@sale_condos'));
Route::get('Park-Ridge-Single-Families-Homes-Sale', array('as'=>'park-ridge-single-families-sale', 'uses'=>'ParkRidgeRealEstateController@sale_single_fam'));
Route::get('Park-Ridge-Condos-Sale', array('as'=>'park-ridge-condos-sale', 'uses'=>'ParkRidgeRealEstateController@sale_condos'));
Route::get('Park-Ridge-Rentals-60068', array('as'=>'park-ridge-houses-rent-60068', 'uses'=>'ParkRidgeRealEstateController@rent_60068'));
Route::get('Park-Ridge-Apartments-for-Rent', array('as'=>'park-ridge-apartments-rent', 'uses'=>'ParkRidgeRealEstateController@rent_apartments'));
Route::get('Park-Ridge-Houses-for-Rent', array('as'=>'park-ridge-houses-rent', 'uses'=>'ParkRidgeRealEstateController@rent_houses'));

Route::get('Glenview-Real-Estate-Listings', array('as'=>'glenview-lists', 'uses'=>'GlenviewRealEstateController@index'));
Route::get('Glenview-Houses-Sale-60025', array('as'=>'glenview-houses-sale-60025', 'uses'=>'GlenviewRealEstateController@sale_60025'));
Route::get('Glenview-Houses-Sale-60026', array('as'=>'glenview-houses-sale-60026', 'uses'=>'GlenviewRealEstateController@sale_60026'));
Route::get('Glenview-Single-Families-Homes-Sale', array('as'=>'glenview-single-families-sale', 'uses'=>'GlenviewRealEstateController@sale_single_fam'));
Route::get('Glenview-Condos-Sale', array('as'=>'glenview-condos-sale', 'uses'=>'GlenviewRealEstateController@sale_condos'));
Route::get('Glenview-Single-Families-Homes-Sale', array('as'=>'glenview-single-families-sale', 'uses'=>'GlenviewRealEstateController@sale_single_fam'));
Route::get('Glenview-Condos-Sale', array('as'=>'glenview-condos-sale', 'uses'=>'GlenviewRealEstateController@sale_condos'));
Route::get('Glenview-Rentals-60026', array('as'=>'glenview-houses-rent-60026', 'uses'=>'GlenviewRealEstateController@rent_60026'));
Route::get('Glenview-Rentals-60025', array('as'=>'glenview-houses-rent-60025', 'uses'=>'GlenviewRealEstateController@rent_60025'));
Route::get('Glenview-Apartments-for-Rent', array('as'=>'glenview-apartments-rent', 'uses'=>'GlenviewRealEstateController@rent_apartments'));
Route::get('Glenview-Houses-for-Rent', array('as'=>'glenview-houses-rent', 'uses'=>'GlenviewRealEstateController@rent_houses'));

Route::get('Morton-Grove-Real-Estate-Listings', array('as'=>'morton-grove-lists', 'uses'=>'MortonGroveRealEstateController@index'));
Route::get('Morton-Grove-Houses-Sale-60053', array('as'=>'morton-grove-houses-sale-60053', 'uses'=>'MortonGroveRealEstateController@sale_60053'));
Route::get('Morton-Grove-Single-Families-Homes-Sale', array('as'=>'morton-grove-single-families-sale', 'uses'=>'MortonGroveRealEstateController@sale_single_fam'));
Route::get('Morton-Grove-Condos-Sale', array('as'=>'morton-grove-condos-sale', 'uses'=>'MortonGroveRealEstateController@sale_condos'));
Route::get('Morton-Grove-Single-Families-Homes-Sale', array('as'=>'morton-grove-single-families-sale', 'uses'=>'MortonGroveRealEstateController@sale_single_fam'));
Route::get('Morton-Grove-Condos-Sale', array('as'=>'morton-grove-condos-sale', 'uses'=>'MortonGroveRealEstateController@sale_condos'));
Route::get('Morton-Grove-Rentals-60053', array('as'=>'morton-grove-houses-rent-60053', 'uses'=>'MortonGroveRealEstateController@rent_60053'));
Route::get('Morton-Grove-Apartments-for-Rent', array('as'=>'morton-grove-apartments-rent', 'uses'=>'MortonGroveRealEstateController@rent_apartments'));
Route::get('Morton-Grove-Houses-for-Rent', array('as'=>'morton-grove-houses-rent', 'uses'=>'MortonGroveRealEstateController@rent_houses'));

Route::get('Evanston-Real-Estate-Listings', array('as'=>'evanston-lists', 'uses'=>'EvanstonRealEstateController@index'));
Route::get('Evanston-Houses-Sale-60201', array('as'=>'evanston-houses-sale-60201', 'uses'=>'EvanstonRealEstateController@sale_60201'));
Route::get('Evanston-Houses-Sale-60202', array('as'=>'evanston-houses-sale-60202', 'uses'=>'EvanstonRealEstateController@sale_60202'));
Route::get('Evanston-Houses-Sale-60203', array('as'=>'evanston-houses-sale-60203', 'uses'=>'EvanstonRealEstateController@sale_60203'));
Route::get('Evanston-Single-Families-Homes-Sale', array('as'=>'evanston-single-families-sale', 'uses'=>'EvanstonRealEstateController@sale_single_fam'));
Route::get('Evanston-Condos-Sale', array('as'=>'evanston-condos-sale', 'uses'=>'EvanstonRealEstateController@sale_condos'));
Route::get('Evanston-Single-Families-Homes-Sale', array('as'=>'evanston-single-families-sale', 'uses'=>'EvanstonRealEstateController@sale_single_fam'));
Route::get('Evanston-Condos-Sale', array('as'=>'evanston-condos-sale', 'uses'=>'EvanstonRealEstateController@sale_condos'));
Route::get('Evanston-Rentals-60201', array('as'=>'evanston-houses-rent-60201', 'uses'=>'EvanstonRealEstateController@rent_60201'));
Route::get('Evanston-Rentals-60202', array('as'=>'evanston-houses-rent-60202', 'uses'=>'EvanstonRealEstateController@rent_60202'));
Route::get('Evanston-Apartments-for-Rent', array('as'=>'evanston-apartments-rent', 'uses'=>'EvanstonRealEstateController@rent_apartments'));
Route::get('Evanston-Houses-for-Rent', array('as'=>'evanston-houses-rent', 'uses'=>'EvanstonRealEstateController@rent_houses'));

Route::get('Niles-Real-Estate-Listings', array('as'=>'niles-lists', 'uses'=>'NilesRealEstateController@index'));
Route::get('Niles-Houses-Sale-60714', array('as'=>'niles-houses-sale-60714', 'uses'=>'NilesRealEstateController@sale_60714'));
Route::get('Niles-Single-Families-Homes-Sale', array('as'=>'niles-single-families-sale', 'uses'=>'NilesRealEstateController@sale_single_fam'));
Route::get('Niles-Condos-Sale', array('as'=>'niles-condos-sale', 'uses'=>'NilesRealEstateController@sale_condos'));
Route::get('Niles-Single-Families-Homes-Sale', array('as'=>'niles-single-families-sale', 'uses'=>'NilesRealEstateController@sale_single_fam'));
Route::get('Niles-Condos-Sale', array('as'=>'niles-condos-sale', 'uses'=>'NilesRealEstateController@sale_condos'));
Route::get('Niles-Rentals-60714', array('as'=>'niles-houses-rent-60714', 'uses'=>'NilesRealEstateController@rent_60714'));
Route::get('Niles-Apartments-for-Rent', array('as'=>'niles-apartments-rent', 'uses'=>'NilesRealEstateController@rent_apartments'));
Route::get('Niles-Houses-for-Rent', array('as'=>'niles-houses-rent', 'uses'=>'NilesRealEstateController@rent_houses'));

Route::get('Skokie-Real-Estate-Listings', array('as'=>'skokie-lists', 'uses'=>'SkokieRealEstateController@index'));
Route::get('Skokie-Houses-Sale-60077', array('as'=>'skokie-houses-sale-60077', 'uses'=>'SkokieRealEstateController@sale_60077'));
Route::get('Skokie-Houses-Sale-60076', array('as'=>'skokie-houses-sale-60076', 'uses'=>'SkokieRealEstateController@sale_60076'));
Route::get('Skokie-Houses-Sale-60203', array('as'=>'skokie-houses-sale-60203', 'uses'=>'SkokieRealEstateController@sale_60203'));
Route::get('Skokie-Single-Families-Homes-Sale', array('as'=>'skokie-single-families-sale', 'uses'=>'SkokieRealEstateController@sale_single_fam'));
Route::get('Skokie-Condos-Sale', array('as'=>'skokie-condos-sale', 'uses'=>'SkokieRealEstateController@sale_condos'));
Route::get('Skokie-Single-Families-Homes-Sale', array('as'=>'skokie-single-families-sale', 'uses'=>'SkokieRealEstateController@sale_single_fam'));
Route::get('Skokie-Condos-Sale', array('as'=>'skokie-condos-sale', 'uses'=>'SkokieRealEstateController@sale_condos'));
Route::get('Skokie-Rentals-60077', array('as'=>'skokie-houses-rent-60077', 'uses'=>'SkokieRealEstateController@rent_60077'));
Route::get('Skokie-Rentals-60076', array('as'=>'skokie-houses-rent-60076', 'uses'=>'SkokieRealEstateController@rent_60076'));
Route::get('Skokie-Apartments-for-Rent', array('as'=>'skokie-apartments-rent', 'uses'=>'SkokieRealEstateController@rent_apartments'));
Route::get('Skokie-Houses-for-Rent', array('as'=>'skokie-houses-rent', 'uses'=>'SkokieRealEstateController@rent_houses'));




/* =locationEnd */


/* =buying */
Route::get('buying-home-in-skokie', array('as'=>'buying-home-in-skokie', 'uses'=>'HomeInSkokieController@index'));
Route::get('Houses-Sale-Skokie/60076', array('as'=>'skokie-60076', 'uses'=>'HomeInSkokieController@skokie_60076'));
Route::get('Houses-Sale-Skokie/60077', array('as'=>'skokie-60077', 'uses'=>'HomeInSkokieController@skokie_60077'));
Route::get('Houses-Sale-Skokie/60203', array('as'=>'skokie-60203', 'uses'=>'HomeInSkokieController@skokie_60203'));

Route::get('Houses-Sale-Skokie/Single-Family', array('as'=>'skokie-single', 'uses'=>'HomeInSkokieController@skokie_single'));
Route::get('Houses-Sale-Skokie/Condos', array('as'=>'skokie-condos', 'uses'=>'HomeInSkokieController@skokie_condos'));
 

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


Route::get('Realty-Property-Sale-North-Chicagoland', array('as'=>'show-all-listings', 'uses'=>'SearchController@index'));
Route::get('search', 'SearchController@index');

Route::get('{search}/{id}', 'SearchController@show');

/*  Browse db */
Route::get('Single-Family-Homes-For-Sale', array('as'=>'sale-single', 'uses'=>'SearchController@sale_single'));
Route::get('Condos-Apartments-For-Sale', array('as'=>'sale-condos', 'uses'=>'SearchController@sale_condos'));
Route::get('browse/{type}', array('as'=>'browse', 'uses'=>'SearchController@browse'));

/* Agent listing */

Route::get('agent/{id}', 'AgentController@show_listings');
Route::get('agent-rentals/{id}', 'AgentController@show_rentals');
Route::get('all-agents', array('as'=>'all-agents', 'uses'=>'AboutController@allAgents'));

/*  Renting  */
Route::get('rent', 'RentController@index');
Route::get('rent/{id}', 'RentController@show');

Route::get('Rent-Apartments-in-North-Chicagoland', array('as'=>'rent-apartments', 'uses'=>'RentController@apartments'));
Route::get('Rent-Houses-in-North-Chicagoland', array('as'=>'rent-houses', 'uses'=>'RentController@houses'));

Route::get('Rent-Houses-in-North-Chicagoland', array('as'=>'all-rent-listings', 'uses'=>'RentController@all'));


Route::get('realtor-sale', array('as'=>'Parser-realtor', 'uses'=>'ParserRealtorController@index'));
Route::post('parser-realtor-save4', array('as'=>'parser-realtor-save4', 'uses'=>'ParseController@saveRentCity'));
Route::post('parser-realtor-save3', array('as'=>'parser-realtor-save3', 'uses'=>'ParseController@saveRent'));
Route::post('parser-realtor-save2', array('as'=>'parser-realtor-save2', 'uses'=>'ParseController@saveSale'));
Route::post('parser-realtor-save', array('as'=>'parser-realtor-save', 'uses'=>'ParseController@save'));
Route::get('Remax-Real-Estate-Agents-Hiring', array('as'=>'remax-agents-hiring', 'uses'=>'AboutController@hiring'));
//
