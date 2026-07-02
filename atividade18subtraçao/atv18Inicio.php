<?php
//inclui arquivo responsavel pela conexao
include "conexao.php";


$numero1 = 4;
$numero2 = 2;
$resultado = $numero1 * $numero2;


//linguagem sql

$sql =" INSERT INTO soma(numero1, numero2, resultado)
VALUES($numero1, $numero2,  $resultado)";


if ($conexao->query($sql)) {
    echo "<br> Dados salvo com sucesso!"; 
}else{
    echo "<br> Erro ao salvar";
}

?>

