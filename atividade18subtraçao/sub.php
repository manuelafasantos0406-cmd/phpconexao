<?php
include "conexaosub.php";


$numero1 = 500;
$numero2 = 80;
$numero3 = 30;
$resultado = $numero1 - $numero2 - $numero3;



$sql =" INSERT INTO subtraçao (numero1, numero2, resultado)
VALUES($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)) {
    echo "<br> Dados salvo com sucesso!"; 
}else{
    echo "<br> Erro ao salvar";
}

?>

