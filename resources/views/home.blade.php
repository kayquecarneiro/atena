<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/stylelogin.css') }}" rel="stylesheet"> 
  <title>Bemol - Projeto Atena</title>

</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
    
        <h2 class="active">Entrar</h2>
        <h2> <a class="underlineHover" href="http://127.0.0.1:8000/cadastro" target="_self">Criar Cadastro</a></h2>
        
        <div class="fadeIn first">
        <img src="{{url('storage/img/blogo.svg')}}" id="icon" alt="User Icon" />
        </div>
        <form method="POST">
            <input type="email" id="login" class="fadeIn second" name="login" placeholder="Digite seu email">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="Informe sua senha">
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>

        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</div>
</body>
</html>