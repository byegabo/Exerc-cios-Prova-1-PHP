<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 5</title>
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
            $numero = $_POST["numero"];
            if ($numero % 2 == 0) {
                echo "$numero é Par";
            } else {
                echo "$numero é Ímpar";
            }
        ?>
    </p>
</body>
</html>
