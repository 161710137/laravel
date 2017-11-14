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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
	return '<h1>Halo</h1>'
	.'Selamat Datang di webapp saya<br>'
	.'Laravel,emang keren';
});
	//route parameter
Route::get('/Kantin/{menu}/{nama}/{ngemil}',function($a,$b,$c){
	return 'Makan  <b>'.$a.'</b> <br>'
	        .'Minum <b>'.$b.'</b> <br>'
	         .'Ngemil  <b>'.$c.'</b>';
	     });
//route optional parameter 
Route::get('user/{nama?}',function($a = "Dadang Conelo"){
	return $a;
});