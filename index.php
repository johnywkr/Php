<?php

    $dsn = 'mysql:host=localhost;dbname=xphp_com_pdo';
    $usuario = 'root';
    $senha = '';
    
    //try vai tentar fazer a conexao, se der errado catch vai retornar o error.
    try{
        $conexao = new PDO($dsn, $usuario, $senha);
    } catch(PDOException $e){                           //$e de erro!
        echo 'Erro ' . $e->getCode() .'Mensagem: ' . $e->getMessage(); 
        //registrar erro
    }
    