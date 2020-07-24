<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __invoke(Request $request){
        
        $loginUser = $request->input('loginUser','0');
        $passwordUser = md5($request->input('passwordUser','0'));

        $listaUsuarios = DB::select('SELECT * from user');

        if(count($listaUsuarios) != 0){

            foreach($listaUsuarios as $user){
                if(strcmp($loginUser,$user->email) == 0){
                    if(strcmp($passwordUser,$user->passworduser) == 0){


                        if(empty($user->lastName)){
                            setcookie('lastName', "-");
                        }else{
                            setcookie('lastName', $user->lastName);
                        }

                        if(empty($user->birthDate)){
                            setcookie('birthDate', "-");
                        }else{
                            setcookie('birthDate', $user->birthDate);
                        }

                        if(empty($user->CPF)){
                            setcookie('CPF', "-");
                        }else{
                            setcookie('CPF', $user->CPF);
                        }

                        if(empty($user->RG)){
                            setcookie('RG', "-");
                        }else{
                            setcookie('RG', $user->RG);
                        }

                        if(empty($user->CNPJ)){
                            setcookie('CNPJ', "-");
                        }else{
                            setcookie('CNPJ', $user->CNPJ);
                        }

                        if(empty($user->razaosocial)){
                            setcookie('razaosocial', "-");
                        }else{
                            setcookie('razaosocial', $user->razaosocial);
                        }

                        if(empty($user->ie)){
                            setcookie('ie', "-");  
                        }else{
                            setcookie('ie', $user->ie);  
                        }


                
                    if(strcmp($user->gender,"1") == 0){
                        
                            setcookie('gender', "Feminino");
                        
                        }else if(strcmp($user->gender,"2") == 0){
                        
                            setcookie('gender', "Masculino");
                        
                        }else{
                        
                            setcookie('gender', "Indefinido");

                        }

                    setcookie('userID', $user->userID);
                    setcookie('namep', $user->namep);
                    setcookie('cellPhone', $user->cellPhone);
                    setcookie('landline', $user->landline);           
                    setcookie('email', $user->email);

                    setcookie('nameAddress', $user->nameAddress);
                    setcookie('cep', $user->cep);
                    setcookie('numberAd', $user->numberAd);
                    setcookie('neighborhood', $user->neighborhood);
                    setcookie('city', $user->city);
                    setcookie('reference', $user->reference);
                    setcookie('complement', $user->complement);
                    setcookie('stateAnd', $user->stateAnd);
                    setcookie('endereco',$user->endereco);


                            
                    
                    return view('painelcliente');
                    break;
                    }else{
                        echo "<script>alert('E-mail ou senha inválidos.');</script>";
                        return view('home');
                    }
                }else{
                    echo "<script>alert('E-mail ou senha inválidos.');</script>";
                    return view('home');
                }
            }
        }else{
            echo "<script>alert('Base de dados sem registros.');</script>";
            return view('home');
        }

    }
}
