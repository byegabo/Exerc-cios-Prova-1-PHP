<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    if ($numero > 0) {
        $resultado = "Positivo";
    } elseif ($numero < 0) {
        $resultado = "Negativo";
    } else {
        $resultado = "Igual a Zero";
    }
    
    echo "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f0f0f0; text-align: center; padding: 50px; }
            .result { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
            h1 { color: #4CAF50; }
            p { font-size: 18px; }
        </style>
    </head>
    <body>
        <div class='result'>
            <h1>Resultado</h1>
            <p>O número $numero é: <strong>$resultado</strong>.</p>
        </div>
    </body>
    </html>
    ";
}
?>
