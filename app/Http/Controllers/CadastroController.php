<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{

    public function __invoke(Request $request){
        
        return view('cadastro');
                    
    }
}
