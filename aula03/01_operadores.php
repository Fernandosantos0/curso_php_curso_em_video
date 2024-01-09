<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício - 01 Operadores</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>

            <?php
                $preco = $_GET['valor'];
                
                echo "Preço do produto: R$" . number_format($preco, 2, ',', '.');

                $preco += (10 * $preco) / 100;

                echo "<br>O novo preço com 10% de aumento será de R$" . number_format($preco, 2, ',', '.');
            ?>

        </div>

    </body>
</html>