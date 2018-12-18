<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<h1>Cadastrar Cliente!</h1>
<form method="POST" action="cadastro.php"> 
<label>Nome: </label>
<input type="text" name="nome" placeholder="Digite Seu Nome"><br><br>
<label>Email: </label>
<input type="email" name="email" placeholder="Digite o Seu Email"><br><br>
<label>Telefone: </label>
<input type="tel" name="telefone" placeholder="Digite Seu Telefone"><br><br>
<label>Data de Nascimento: </label>
<input type="date" name="nascimento" placeholder="DD/MM/AAAA"><br><br>
<label>CPF: </label>
<input type="text" name="cpf" placeholder="Digite Seu CPF"><br><br>
<label>RG: </label>
<input type="text" name="RG" placeholder="Digite Seu RG"><br><br>
<label>Estado: </label>
<select name="estado">
  <option value="SP">São Paulo</option>
  <option value="RS">Rio Grande do Sul</option>
  <option value="RJ">Rio de Janeiro</option>
  <option value="MG">Minas Gerais</option>
</select><br><br>
<input name="enviar" type="submit" value="Cadastrar">
<input name="limpar" type="reset" value="Limpar">
</form>
    
</body>
</html>