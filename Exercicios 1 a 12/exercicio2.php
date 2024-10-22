<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Verificação de Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <div class="resultado">
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        echo "<h1>Tabuada de $numero</h1>";
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
        }
        echo "</ul>";
    }
?>
