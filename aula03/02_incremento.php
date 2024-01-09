<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício - 02 Incremento</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>
            <?php
                $ano = $_GET['ano'];

                echo "O ano atual é $ano e o ano anterior é " . --$ano;
            ?>
        </div>

    </body>
</html>