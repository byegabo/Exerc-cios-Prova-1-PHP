<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Exercício 4</title>
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
            $operacao = $_POST["operacao"];
            
            switch($operacao) {
                case "+":
                    $resultado = $num1 + $num2;
                    break;
                case "-":
                    $resultado = $num1 - $num2;
                    break;
                case "*":
                    $resultado = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Divisão por zero não permitida";
                    }
                    break;
                default:
                    $resultado = "Operação inválida";
            }
            echo "O resultado da operação é: $resultado";
        ?>
    </p>
</body>
</html>
