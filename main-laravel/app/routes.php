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

Route::get('/', function()

{
	$users = DB::table('aashish')->get();

foreach ($users as $user)
{
    $aashish= $user->name;
    return View::make('index',array('name'=>$aashish));
}

	
	
});
