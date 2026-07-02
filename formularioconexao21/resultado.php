<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
</head>

<body>

    <h1>Resultado da multiplicação</h1>
    <p>
        <?php

        //Incluir o arquivo na conexao do banco de dados
        include "conexao.php";

        $num1 = (float) $_POST['numero1'];
        $num2 = (float) $_POST['numero2'];

        $mult = $num1 * $num2;

        //Comando sql
        $sql = "INSERT INTO mult (numero1, numero2, resultado) 
        VALUES($num1, $num2, $mult)";


        //Guardar na tabela do banco de dados 
        $conexao->query($sql);

        echo "O resultado é: $mult";

        ?>
    </p>

</body>

</html>
