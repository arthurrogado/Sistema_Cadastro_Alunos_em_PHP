<?php 

    try {
        $conexao = new PDO('mysql: host = localhost; dbname=webii', 'root', '');
    }  catch (Exception $erro) {
        try {
            $conexao = new PDO('mysql: host = www.db4free.net; dbname=alunos_rogado', 'arthurrogado', 'arthurrogado');
        } catch (Exception $e) {
            echo $erro -> getMessage();
            echo "<br>";
            echo $erro -> getCode();
        }

    }

?>