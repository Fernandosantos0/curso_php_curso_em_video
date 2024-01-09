<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 04 - Variáveis de Variáveis</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>

            <?php
                # Criando variáveis de variantes
                $site = 'cursoemvideo';
                $$site = 'Curso de PHP';

                echo $site;
                echo '<br>';

                echo $$site;
                echo '<br>';

                echo $cursoemvideo;
            
            ?>

        </div>

    </body>
</html>