<?php
    require_once "conection.php";

    function inserirAluno(PDO $conection, string $nome, float $nota1, float $nota2):void{
        $sql = "INSERT INTO alunos(
            nome, nota1, nota2
        ) VALUES(
            :nome, :nota1, :nota2
        )";

        try {
            $query = $conection->prepare($sql);
            $query->bindValue(":nome", $nome, PDO::PARAM_STR);
            $query->bindValue(":nota1", $nota1, PDO::PARAM_STR);
            $query->bindValue(":nota2", $nota2, PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $erro) {
            die("Erro ao inserir: ".$erro->getMessage());
        }
    };

    function visualizarAlunos(PDO $conection):array{
        $sql = "SELECT
        id, nome, nota1, nota2,
        CAST(((nota1 + nota2) / 2) AS DEC(4,2)) AS media
        FROM alunos ORDER BY nome";

        try {
            $query = $conection->prepare($sql);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao visualizar: ".$erro->getMessage());
        }
        return $resultado;
    };