<?php

    
    try{
        $conexao = new PDO("mysql:host=localhost;dbname=infoschool; charset=utf8", "root", "");
    } catch(PDOException $e){
        echo 'Erro ao conectar com o MYSQL: '.$e->getMessage();
    }
?>