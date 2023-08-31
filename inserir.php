<?php
	if(isset($_POST["submit"])){
		require_once "src/functions-crud.php";
		$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
		$nota1 = filter_input(INPUT_POST, "primeira", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$nota2 = filter_input(INPUT_POST, "segunda", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		inserirAluno($conection, $nome, $nota1, $nota2);
		header("location:visualizar.php");
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<header class="text-center">
		<h1>Cadastrar um novo aluno </h1>
		<hr>
	</header>
	<main class="container">
		<p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>
	
		<form action="#" method="post">
			<p><label for="nome">Nome:</label>
			<input type="text" id="nome" name="nome" required></p>
			
		  <p><label for="primeira">Primeira nota:</label>
			<input type="number" id="primeira" name="primeira" step="0.01" min="0.00" max="10.00" required></p>
			
			<p><label for="segunda">Segunda nota:</label>
			<input type="number" id="segunda" name="segunda" step="0.01" min="0.00" max="10.00" required></p>
			
			<button type="submit" name="submit">Cadastrar aluno</button>
		</form>
	
		<hr>
		<p><a href="index.php" class="btn btn-primary">Voltar ao início</a></p>
	</main>
    		

</body>
</html>