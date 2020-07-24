<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo asset('css/styleCadastro.css')?>" type="text/css">
  <title>Bemol - Painel Cliente</title>

</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
    
        <div class="fadeIn first">
        <img src="{{url('storage/img/user.png')}}" id="icon" alt="User Icon" />
        </div>
        <div>
            <label> Nome              : <?php  echo "".$_COOKIE['namep']." ".$_COOKIE['lastName'] ?></label>
            <label> Data Nascimento   : <?php  echo "".$_COOKIE['birthDate'] ?></label>
            <label> Genero            : <?php  echo "".$_COOKIE['gender'] ?></label>
            <label> Telefone Celular  : <?php  echo "".$_COOKIE['cellPhone'] ?></label>
            <label> Telefone Fixo     : <?php  echo "".$_COOKIE['landline'] ?></label>
            <label> CPF               : <?php  echo "".$_COOKIE['CPF'] ?></label>
            <label> RG                : <?php  echo "".$_COOKIE['RG'] ?></label>
            <label> CNPJ              : <?php  echo "".$_COOKIE['CNPJ'] ?></label>
            <label> E-mail            : <?php  echo "".$_COOKIE['email'] ?></label>
            <label> Razao Social      : <?php  echo "".$_COOKIE['razaosocial'] ?></label>
            <label>  inscricao estadual: <?php  echo "".$_COOKIE['ie'] ?></label>
        </div>    
        <h2> <a class="underlineHover" href="{{ url('/') }}" target="_self">Sair</a></h2>
        <div id="formFooter">
            <a class="underlineHover">Projeto Atena</a>
        </div>

  </div>
</div>
</body>
</html>