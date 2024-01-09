<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02 - Operaçõs Aritmédicas</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>

            <?php
                $n1 = $_GET['a'];
                $n2 = $_GET['b'];
                $m = ($n1 + $n2) / 2;
                
                echo "<h2>Recebedo valores: $n1 e $n2</h2>";

                echo 'A soma vale ' . ($n1 + $n2);
                echo '<br>A Subtração vale ' . ($n1 - $n2);
                echo '<br>A multiplicação vale ' . ($n1 * $n2);
                echo '<br>A divisão vale ' . ($n1 / $n2);
                echo '<br>O módulo vale ' . ($n1 % $n2); 
                echo "<br>A média é $m";
            ?>

        </div>
    </body>
</html>