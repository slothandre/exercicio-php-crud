<?php
    require_once "src/functions-crud.php";
    $listaDeAlunos = visualizarAlunos($conection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header class="text-center">
        <h1>Lista de alunos</h1>
        <hr>
    </header>
    <main class="container">
        <p><a href="inserir.php" class="btn btn-primary">Inserir novo aluno</a></p>
    
       <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
    para exibir a relação de alunos existentes no banco de dados.
        
    Obs.: não se esqueça de criar também os links dinâmicos para
    as páginas de atualização e exclusão. -->

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="table-info text-center">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Média</th>
                    <th>Situação</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($listaDeAlunos as $aluno){ 
                    if($aluno["media"] >= 7){
                        $situacao = "Aprovado";
                        $class = "table-success";
                    } elseif($aluno["media"] >= 5){
                        $situacao = "Recuperação";
                        $class = "table-warning";
                    } else {
                        $situacao = "Reprovado";
                        $class = "table-danger";
                    }
                ?>
                    <tr class="<?=$class?>">
                        <td><?=$aluno["id"]?></td>
                        <td><?=$aluno["nome"]?></td>
                        <td><?=$aluno["nota1"]?></td>
                        <td><?=$aluno["nota2"]?></td>
                        <td><?=$aluno["media"]?></td>
                        <td><?=$situacao?></td>
                        <td class="text-center"><a class="btn btn-primary" href="atualizar.php?id=<?=$aluno["id"]?>"><i class="bi bi-pencil"></i> Editar</a></td>
                        <td class="text-center"><a class="excluir btn btn-primary" href="excluir.php?id=<?=$aluno["id"]?>"><i class="bi bi-trash"></i> Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
    
        <p><a href="index.php" class="btn btn-primary">Voltar ao início</a></p>
    </main>
    <script src="js/confirma-exclusao.js"></script>
</body>
</html>