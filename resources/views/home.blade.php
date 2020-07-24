<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo asset('css/stylelogin.css')?>" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Bemol - Projeto Atena</title>
  
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
    
        <h2 class="active">Entrar</h2>
        <h2> <a class="underlineHover" href="{{ url('/cadastro') }}" target="_self">Criar Cadastro</a></h2>
        
        <div class="fadeIn first">
        <img src="{{url('storage/img/blogo.svg')}}" id="icon" alt="User Icon" />
        </div>
        <form method="POST">
        @csrf
            <input type="email" id="loginUser" class="fadeIn second" name="loginUser" placeholder="Digite seu e-mail">
            <input type="password" id="passwordUser" class="fadeIn third" name="passwordUser" placeholder="Informe sua senha">
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</div>
</body>
</html>