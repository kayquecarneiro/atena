<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveCadastroController extends Controller
{

    public function __invoke(Request $request){
        
        $nome = $request->input('nome','');
        $selectSexo = $request->input('selectSexo','0');
        $sobreNome = $request->input('sobrenome','');
        $cpf = $request->input('cpf_numero','');
        $datanascimento = $request->input('dataNascimento','');
           
        if(empty($cpf)){
            $typePerson = 2;
        }else{
            $typePerson = 1;
        }
        
        $checked = 0;

        $rg = $request->input('rg','0');
        $razaosocial = $request->input('razaosocial','0');
        $cnpj_numero = $request->input('cnpj_numero','0');
        $celular = $request->input('celular','0');
        $telfixo = $request->input('telfixo','0');
        $cep = $request->input('cep','');
        $endereco = $request->input('endereco','0');
        $numero = $request->input('numero','0');
        $complemento = $request->input('complemento','0');
        $bairro = $request->input('bairro','0');
        $cidade = $request->input('cidade','0');
        $estado = $request->input('estado','0');
        $referencia = $request->input('referencia','0');
        $email = $request->input('email','0');
        $senha = md5($request->input('senha','0'));
        $ie = $request->input('ie','0');

        DB::insert('INSERT INTO user (namep, lastName, birthDate, gender, cellPhone, landline, CPF, RG, CNPJ, email, passworduser, checked, razaosocial, ie) 
                  VALUES ("'.$nome.'", "'.$sobreNome.'", "'.$datanascimento.'", '.$selectSexo.', "'.$celular.'", "'.$telfixo.'", "'.$cpf.'", "'.$rg.'", "'.$cnpj_numero.'", "'.$email.'", "'.$senha.'",'.$checked.', "'.$razaosocial.'", "'.$ie.'")');

        return view('success');
    }
}
