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

        <table class="table table-striped table-hover">
            <thead>
                <tr class="table-info">
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
                <?php foreach($listaDeAlunos as $aluno){ ?>
                    <tr>
                        <td><?=$aluno["id"]?></td>
                        <td><?=$aluno["nome"]?></td>
                        <td><?=$aluno["nota1"]?></td>
                        <td><?=$aluno["nota2"]?></td>
                        <td><?=$aluno["media"]?></td>
                        <td>Situação</td>
                        <td><a class="btn btn-primary" href="atualizar.php?id=<?=$aluno["id"]?>">Editar</a></td>
                        <td><a class="btn btn-primary" href="excluir.php?id=<?=$aluno["id"]?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
    
        <p><a href="index.php" class="btn btn-primary">Voltar ao início</a></p>
    </main>
</body>
</html>