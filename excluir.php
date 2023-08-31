<?php
    require_once "src/functions-crud.php";
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
    excluirAluno($conection, $id);
    header("location:visualizar.php");
?>