<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('/cadastro','CadastroController');

Route::view('/painelcliente','painelcliente');

Route::fallback(function(){
    return Route::view('notFound');
});

