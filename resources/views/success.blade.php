<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo asset('css/styleCadastro.css')?>" type="text/css">
  <title>Bemol - Projeto Atena</title>

</head>
<body>
  <div class="wrapper">
    <div id="formContent">   
        <div class="fadeIn first">
        
        </div>
        <form>
          <img src="{{url('storage/img/sucess.png')}}" id="icon" alt="User Icon" />
          <b>Usuário cadastrado com sucesso. <a class="underlineHover active" href="{{ url('/') }}" target="_self">clique aqui para voltar ao início</a></b>
        </form>

        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</div>
</body>
</html>