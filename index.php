<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    
    //try vai tentar fazer a conexao, se der errado catch vai retornar o error.

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll();

        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        echo $lista[0]['email'];

    } catch(PDOException $e){                           //$e de erro!
        echo 'Erro ' . $e->getCode() .'Mensagem: ' . $e->getMessage(); 
        //registrar erro
    }
    