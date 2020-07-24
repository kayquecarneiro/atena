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

        $rg = $request->input('rg','N');
        $razaosocial = $request->input('razaosocial','N');
        $cnpj_numero = $request->input('cnpj_numero','N');
        $celular = $request->input('celular','N');
        $telfixo = $request->input('telfixo','N');
        $cep = $request->input('cep',"N/A");
        $destinatario = $request->input('destinatario',"N/A");
        $endereco = $request->input('endereco','N');
        $numero = $request->input('numero','N');
        $complemento = $request->input('complemento','N');
        $bairro = $request->input('bairro','N');
        $cidade = $request->input('cidade','N');
        $estado = $request->input('estado','N');
        $referencia = $request->input('referencia','N');
        $email = $request->input('email','N');
        $senha = md5($request->input('senha','N'));
        $ie = $request->input('ie','N');
        $endereco = $request->input('endereco','N');

        DB::insert('INSERT INTO user (namep, lastName, birthDate, gender, cellPhone, landline, CPF, RG, CNPJ, email, passworduser, checked, razaosocial, ie, nameAddress, cep, numberAd, neighborhood, city, reference, complement, stateAnd, endereco) 
                  VALUES ("'.$nome.'", "'.$sobreNome.'", "'.$datanascimento.'", '.$selectSexo.', "'.$celular.'", "'.$telfixo.'", "'.$cpf.'", "'.$rg.'", "'.$cnpj_numero.'", "'.$email.'", "'.$senha.'",'.$checked.', "'.$razaosocial.'", "'.$ie.'",
                  "'.$destinatario.'","'.$cep.'","'.$numero.'","'.$bairro.'","'.$cidade.'","'.$referencia.'","'.$complemento.'","'.$estado.'","'.$endereco.'")',);

        return view('success');
    }
}
