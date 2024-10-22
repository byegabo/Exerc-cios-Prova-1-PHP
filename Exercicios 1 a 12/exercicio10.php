<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Identificação do Mês</title>
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
                $numeroMes = $_POST["numeroMes"];

                switch ($numeroMes) {
                    case 1:
                        echo "O mês correspondente é Janeiro.";
                        break;
                    case 2:
                        echo "O mês correspondente é Fevereiro.";
                        break;
                    case 3:
                        echo "O mês correspondente é Março.";
                        break;
                    case 4:
                        echo "O mês correspondente é Abril.";
                        break;
                    case 5:
                        echo "O mês correspondente é Maio.";
                        break;
                    case 6:
                        echo "O mês correspondente é Junho.";
                        break;
                    case 7:
                        echo "O mês correspondente é Julho.";
                        break;
                    case 8:
                        echo "O mês correspondente é Agosto.";
                        break;
                    case 9:
                        echo "O mês correspondente é Setembro.";
                        break;
                    case 10:
                        echo "O mês correspondente é Outubro.";
                        break;
                    case 11:
                        echo "O mês correspondente é Novembro.";
                        break;
                    case 12:
                        echo "O mês correspondente é Dezembro.";
                        break;
                    default:
                        echo "Número inválido. Não existe mês correspondente.";
                }
            ?>
        </p>
    </div>
</body>
</html>
