<?php
1/* conexao com o bd */
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_filipe";
$password = "filipe123";
$database = "baseteste_filipe";

$conexao = mysqli_connect($servername, $username,  $password, $database);

if(!$conexao){
    die("Falhou a conexão" .mysqli_connect_error());
    }else{
        echo "conectado com sucesso";
    }//checca se a conexão com o banco de daos foi um sucesso.
    ?>
