<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    
    //try vai tentar fazer a conexao, se der errado catch vai retornar o error.

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        /*$query = '
            create table if not exists tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
        )';

        $retorno = $conexao->exec($query);
        //0
        echo $retorno; */

        $query = '
           insert into tb_usuarios(
                nome, email, senha
           )values(
                "jamiltom damasceno", "jamiltom@gmail.com", "123456"
           )
        ';

        $conexao->exec($query);

        $query = '
           insert into tb_usuarios(
                nome, email, senha
           )values(
                "lucas", "lucas@gmail.com", "987654"
           )
        ';

        $conexao->exec($query);

        $query = '
           insert into tb_usuarios(
                nome, email, senha
           )values(
                "kety", "kety@gmail.com", "123123"
           )
        ';

        $conexao->exec($query);
        

    } catch(PDOException $e){                           //$e de erro!
        echo 'Erro ' . $e->getCode() .'Mensagem: ' . $e->getMessage(); 
        //registrar erro
    }
    