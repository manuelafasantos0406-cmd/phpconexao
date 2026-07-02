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

    <h1>Resultado da Soma</h1>
    <p>
        <?php

        //Incluir o arquivo na conexao do banco de dados
        include "formconexao.php";

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $soma = $num1 + $num2;


        //Comando sql
        $sql = "INSERT INTO soma ( numero1 , numero2 l, resultado )
        VALUES($num1, $num2, $soma)";
        

        //Guardar na tabela do banco de dados 
        $conexao->query($sql);

        echo "O resultado é: $soma";

        ?>
    </p>

</body>

</html>