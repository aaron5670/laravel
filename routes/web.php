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

Route::get( '/', function () {
	$links = App\Link::all();

//	Debugbar::info( $links );
//	Debugbar::error( 'Error!' );
//	Debugbar::warning( 'Watch out…' );
//	debug( 'Debug message' );

//	return view( 'welcome', [ 'links' => $links ] );
	return view( 'index' );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );
//Route::get( '/listing', 'ListingController@index' )->name( 'listing' );

Route::get( '/listing', function () {
	$listings = \App\Listings::all();

	return view( 'listing' )->with( 'listings', $listings );
} );
