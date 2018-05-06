<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Movie;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
    	$movies = Movie::orderBy('year', 'desc')->get();

    	return view('movies', [
        	'movies' => $movies
    	]);
	});
	
	Route::get('/moviesjson', function () {
	$movies= Movie::all()->toArray();
    	return response()->json(array('movie'=>$movies));
	});
});