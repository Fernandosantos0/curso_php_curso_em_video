<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 04 - Comparando valores</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $a = 3;
                $b = '3';
                $r = $a === $b ? 'SIM' : 'NÃO';

                echo 'As variáveis A e B são identicas? ' . $r;
            ?>
        </div>
    </body>
</html>