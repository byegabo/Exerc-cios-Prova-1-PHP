<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Comparação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div>
        <h1>Resultado</h1>
        <p>
            <?php
                $a = $_POST["valorA"];
                $b = $_POST["valorB"];

                if ($a > $b) {
                    echo "A ($a) é maior que B ($b).";
                } elseif ($a < $b) {
                    echo "A ($a) é menor que B ($b).";
                } else {
                    echo "A ($a) é igual a B ($b).";
                }
            ?>
        </p>
    </div>
</body>
</html>
