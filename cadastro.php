<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Cadastro </title> 
		<link rel="stylesheet" href="./css/login.css">
</head> 

<body> 
	<h1> Cadastro de usuário </h1>

	<form action="" method="post">
		<fieldset>
			<legend> Dados cadastrais </legend>
			
			<label class="alinha"> E-mail: </label>
			
			<input type="email" name="email" class="maior" autofocus> <br>
			
			<label class="alinha"> Usuario: </label>
			<input type="text" name="usuario"> <br>

			<label class="alinha"> Senha: </label>
			<input type="password" name="senha"> <br>
			
			<button type="submit" name="cadastrar"> Cadastrar </button>
		</fieldset>
	</form>

</body>
</html>			