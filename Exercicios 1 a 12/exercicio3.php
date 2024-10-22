<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 3</title>
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
            function fatorial($n) {
                if ($n <= 1) {
                    return 1;
                } else {
                    return $n * fatorial($n - 1);
                }
            }

            $numero = $_POST["numero"];
            echo "O fatorial de $numero é: " . fatorial($numero);
        ?>
    </p>
</body>
</html>
