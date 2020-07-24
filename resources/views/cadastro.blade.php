<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/styleCadastro.css') }}" rel="stylesheet"> 
  <title>Bemol - Cadastro</title>

</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
    
        <h2> <a class="underlineHover active" href="http://127.0.0.1:8000/" target="_self">Entrar</a></h2>
        <h2 class="active">Criar Cadastro</h2>
        
        <div class="fadeIn first">
        <img src="{{url('storage/img/blogo.svg')}}" id="icon" alt="User Icon" />
        </div>

        <form class="form-horizontal">
          <h4><legend>Dados Pessoais</legend></h4>
            

            <div class="form-group">
              <div class="col-md-4">
                <select id="tipoPessoa" name="tipoPessoa" class="tipopessoa">
                  <option value="1">Pessoa Física</option>
                  <option value="2">Pessoa Jurídica</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-4 control-label" for="nome">Nome</label>
              <div class="col-md-4">
                  <input id="nome" name="nome" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="sobreNome">Sobrenome</label>
              <div class="col-md-4">
                  <input id="sobreNome" name="sobreNome" type="text" class="form-control input-md" required="">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-4 control-label" for="dataNascimento">Data de Nascimento</label>
              <div class="col-md-4">
                <input id="dataNascimento" name="dataNascimento" type="text" class="form-control input-md" required="" onkeypress="$(this).mask('00/00/0000')">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="sexo">Sexo</label>
              <div class="col-md-4">
                <input id="sexo" name="sexo" type="text" class="form-control input-md" required="" >
              </div>
            </div>
          </form>

            <input type="submit" class="fadeIn fourth" value="Cadastrar">
        </form>

        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</body>
</html>