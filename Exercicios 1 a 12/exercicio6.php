<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 6</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        p {
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Resultado</h1>
    <p>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            $numeros = array($num1, $num2, $num3);
            sort($numeros);

            echo "Os números em ordem crescente são: " . implode(", ", $numeros);
        ?>
    </p>
</body>
</html>
