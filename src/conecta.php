<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "crud_escola_andre";

    try {
        $conection = new PDO(
            "mysql:host=$server;dbname=$db;charset=utf8",
            $user, $password
        );
        $conection->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    } catch (Exception $erro) {
        die("Azedou o pé do frango :( ".$erro->getMessage());
    };