<!-- //LOCATION: remax/public 
-->
<?php


/*  Renting  */
Route::get('rent', 'RentController@index');
Route::get('rent/{id}', 'RentController@show');
Route::get('rent-apartments', 'RentController@apartments');
Route::get('rent-houses', 'RentController@houses');
Route::get('all-rent-listings', array('as'=>'all-rent-listings', 'uses'=>'RentController@all'));
remax-skokie
remax-skokie