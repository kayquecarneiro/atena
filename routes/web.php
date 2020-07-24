<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/cadastro','cadastro');

Route::view('/painelcliente','painelcliente');

Route::fallback(function(){
    return view('notFound');
});

