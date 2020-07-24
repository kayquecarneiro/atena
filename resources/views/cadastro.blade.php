<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo asset('js/ocultar.js')?>"></script>
  <link rel="stylesheet" href="<?php echo asset('css/styleCadastro.css')?>" type="text/css">
  
  <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

  </script>
  <script type="text/javascript">
    function validar(){
      var senha = formuser.senha.value;
      var rep_senha = formuser.resenha.value;
      
      if(senha == "" || senha.length <= 5){
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.senha.focus();
        return false;
      }
      
      if(rep_senha == "" || rep_senha.length <= 5){
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.rep_senha.focus();
        return false;
      }
      
      if (senha != rep_senha) {
        alert('Senhas diferentes');
        formuser.senha.focus();
        return false;
      }
    }
  </script>
  <title>Bemol - Cadastro</title>

</head>
<body>
<div class="wrapper">
    <div id="formContent">
    
        <h2> <a class="underlineHover active" href="{{ url('/') }}" target="_self">Entrar</a></h2>
        <h2 class="active">Criar Cadastro</h2>

        <div class="fadeIn first">
        <img src="{{url('storage/img/blogo.svg')}}" id="icon" alt="User Icon" />
        </div>

        <form class="form-horizontal" name="formuser" method="POST">
          @csrf
          <h4><legend>Dados Pessoais</legend></h4>
          <hr/>

            <div class="form-group">
              <select id='select' name='select' class="tipopessoa">
                <option value='0'>Selecione</option>
                <option value='1'>Pessoa Física</option>
                <option value='2'>Pessoa Jurídica</option>
              </select>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">* Nome</label>
              <div class="col-md-4">
                  <input id="nome" name="nome" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div  id='vtp'>
              <div id='1'>
                     
                <label class="col-md-4 control-label" id='sobrenome' for="sobrenome">* Sobrenome</label>
                <input id="sobrenome" name="sobrenome" type="text" class="form-control input-md">

                <label class="col-md-4 control-label" for="dataNascimento">* Data de Nascimento</label>
                <input id="dataNascimento" name="dataNascimento" type="text" class="form-control input-md" onkeypress="$(this).mask('00/00/0000')">
                
                <label class="col-md-4 control-label" for="selectSexo">Sexo</label>
                <select id='selectSexo' name='selectSexo' class="tipopessoa">
                    <option value='1'>Feminino</option>
                    <option value='2'>Masculino</option>
                    <option value='3'>Indefinido</option>
                </select>

                <label class="col-md-4 control-label" for="cpf_numero">* CPF</label>
                <input id="cpf_numero" name="cpf_numero" type="text" class="form-control input-md"  onkeypress="$(this).mask('000.000.000-00')">
                

                <label class="col-md-4 control-label" for="rg">RG</label>
                <input id="rg" name="rg" type="text" class="form-control input-md" onkeypress="$(this).mask('0000000-0')">

              </div>

            
              <div id='2'>

                <label class="col-md-4 control-label" for="razaosocial">* Razão Social</label>
                <input id="razaosocial" name="razaosocial" type="text" class="form-control input-md" >

                <label class="col-md-4 control-label" for="cnpj_numero">* CNPJ</label>
                <input id="cnpj_numero" name="cnpj_numero" type="text" class="form-control input-md"  onkeypress="$(this).mask('00.000.000/0000-00')">

                <label class="col-md-4 control-label" for="ie">* Inscrição Estadual</label>
                <input id="ie" name="ie" type="text" class="form-control input-md" >

              </div>
            
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="celular">* Telefone Celular</label>
              <div class="col-md-4">
                <input id="celular" name="celular" type="text" class="form-control input-md"  onkeypress="$(this).mask('(00) 0 0000-0000')">
                <br><span class="help">Ex: DDD + Telefone</span><br/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="telfixo">Telefone Fixo</label>
              <div class="col-md-4">
                <input id="telfixo" name="telfixo" type="text" class="form-control input-md"  onkeypress="$(this).mask('(00) 0000-0000')">
                <br><span class="help">Ex: DDD + Telefone</span><br/>
              </div>
            </div>

            <h4><legend>Endereço</legend></h4>
            <hr/>

            <div class="form-group">
              <label class="col-md-4 control-label" for="destinatario">Nome do destinatário</label>
              <div class="col-md-4">
                <input id="destinatario" name="destinatario" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="cep">* CEP</label>
              <div class="col-md-4">
                <input id="cep" name="cep" type="text" class="form-control input-md" required="" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000')">
                <br><a span class="help" href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sabe seu CEP ?</a></span><br/>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="endereco">* Endereço</label>
              <div class="col-md-4">
                <input id="endereco" name="endereco" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="numero">* Número</label>
              <div class="col-md-4">
                <input id="numero" name="numero" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="complemento">* Complemento</label>
              <div class="col-md-4">
                <input id="complemento" name="complemento" type="text" class="form-control input-md" required="">
                <br><span class="help">Exemplo: número do apto, bloco, sítio, etc. </span><br/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">* Bairro</label>
              <div class="col-md-4">
                <input id="bairro" name="bairro" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">* Cidade</label>
              <div class="col-md-4">
                <input id="cidade" name="bairro" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="estado">* Estado</label>
              <div class="col-md-4">
                <input id="estado" name="estado" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="referencia">Referência</label>
              <div class="col-md-4">
                <input id="referencia" name="referencia" type="text" class="form-control input-md" required="">
                <br><span class="help">Informar local próximo, por exemplo, um mercadinho ou igreja</span><br/>
              </div>
            </div>

            <h4><legend>Dados de acesso</legend></h4>
            <hr/>

            <div class="form-group">
              <label class="col-md-4 control-label" for="email">* E-mail</label>
              <div class="col-md-4">
                <input id="email" name="email" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="senha">Senha</label>
              <div class="col-md-4">
                <input id="senha" name="senha" type="password" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="resenha">Repita a senha</label>
              <div class="col-md-4">
                <input id="resenha" name="resenha" type="password" class="password form-control input-md" required="">
              </div>
            </div>
            <input type="submit" onclick="return validar()" value="Cadastrar">
        </form>

        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</body>
</html>