<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Praticando - Funções Nativas</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <style>
            h2 {
                color: #rgb(0, 193, 175);
                font-size: 15pt;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $num = $_GET['n'];

                echo "<h2>O número recebido foi: $num</h2>";

                echo 'O valor absoluto é ' . abs($num);
                
                echo '<br>O valor inteiro é ' . intval($num);

                echo '<br>O número arredondado é ' . round($num);

                echo "<br>A exponenciação de $num<sup>5</sup> é " . pow($num, 5);

                echo "<br>A raiz quadrada de $num é " . sqrt($num);
            
            ?>
        </div>
    </body>
</html>