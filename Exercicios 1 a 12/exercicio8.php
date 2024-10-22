<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 10</title>
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
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $nota4 = $_POST["nota4"];
            
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
            echo "A média das notas é: " . number_format($media, 2);
        ?>
    </p>
</body>
</html>
