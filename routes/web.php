<?php

Auth::routes();

Route::get('logout', 'Auth\\LoginController@logout'); //Just added to fix issue

Route::get('/mnps', 'mnps\\MnpsController@index')->name('mnps');

Route::get('/mobile', 'mnps\\MnpsController@index')->name('mobile');

Route::post('resultado','mnps\\ResultadoController@index')->name('resultado');

Route::get('searchender',['as'=>'searchender','uses'=>'AutoCompleteEnderController@index']);

Route::get('searchpessoas',['as'=>'searchpessoas','uses'=>'AutoCompletePessoasController@index']);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');

Route::resource('pessoas', 'PessoaController');

Route::resource('enderecos', 'EnderecoController');

Route::resource('previsaos', 'PrevisaoController');

Route::resource('artigos', 'ArtigoController');

Route::get('nao_autorizado',function (){

    return view('nao_autorizado');

})->name('nao_autorizado');
