<?php
    require_once "src/functions-crud.php";
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    $aluno = visualizarUmAluno($conection, $id);
    if(isset($_POST["atualizar-dados"])){
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
		$nota1 = filter_input(INPUT_POST, "primeira", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$nota2 = filter_input(INPUT_POST, "segunda", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        atualizarAluno($conection, $id, $nome, $nota1, $nota2);
        header("location:visualizar.php");
    };
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header class="text-center">
        <h1>Atualizar dados do aluno </h1>
        <hr>
    </header>
    		
    <main class="container">
        <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>
        <form action="#" method="post">
            <input type="hidden" name="id" value="<?=$aluno["id"]?>">
            
            <p class="form-floating">
                <input class="form-control" value="<?=$aluno["nome"]?>" type="text" name="nome" id="nome" placeholder="" required>
                <label for="nome">Nome:</label>
            </p>
        
            <p class="form-floating">
                <input class="form-control" value="<?=$aluno["nota1"]?>" name="primeira" type="number" id="primeira" step="0.01" min="0.00" max="10.00" placeholder="" required>
                <label for="primeira">Primeira nota:</label>
            </p>
                
            <p class="form-floating">
                <input class="form-control" value="<?=$aluno["nota2"]?>" name="segunda" type="number" id="segunda" step="0.01" min="0.00" max="10.00" placeholder="" required>
                <label for="segunda">Segunda nota:</label>
            </p>
            <p class="form-floating">
            <!-- Campo somente leitura e desabilitado para edição.
            Usado apenas para exibição do valor da média -->
                <input class="form-control" value="<?=$aluno["media"]?>" name="media" type="number" id="media" step="0.01" min="0.00" max="10.00" readonly disabled>
                <label for="media">Média:</label>
            </p>
            <p class="form-floating">
            <!-- Campo somente leitura e desabilitado para edição
            Usado apenas para exibição do texto da situação -->
            <?php
                if($aluno["media"] >= 7){
                    $situacao = "Aprovado";
                } elseif($aluno["media"] >= 5){
                    $situacao = "Recuperação";
                } else {
                    $situacao = "Reprovado";
                } 
            ?>
                <input class="form-control" value="<?=$situacao?>" type="text" name="situacao" id="situacao" readonly disabled>
                <label for="situacao">Situação:</label>
            </p>
            <button class="btn btn-primary" name="atualizar-dados">Atualizar dados do aluno</button>
        </form>
        
        <hr>
        <p><a class="btn btn-primary" href="visualizar.php">Voltar à lista de alunos</a></p>
    </main>


</body>
</html>