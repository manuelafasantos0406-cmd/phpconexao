<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "matematica";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro na conexão.");
}

?>

