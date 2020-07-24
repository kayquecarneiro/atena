<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::post('/','LoginController');

Route::get('/cadastro','CadastroController');

Route::post('/cadastro','SaveCadastroController');

Route::view('/painelcliente','painelcliente');

Route::view('/success','success');

Route::fallback(function(){
    return Route::view('notFound');
});

