<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width='device-width', initial-scale=1.0">
        <title>Curso de PHP</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Estrutura de repetição while
                $c = 1;
                while($c < 11) {
                    echo $c . '<br>';
                    $c++;
                }
            ?>
        </div>
    </body>
</html>