<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 0</title>
        <!-- css --> 
        <style>

            body {
                font-family: Verdana, Arial, sans-serif;
            }

            h2 {
                color: green;
                text-shadow: 1px 1px 1px #000;
            }

        </style>
    </head>
    <body>
        <h1>Testando PHP</h1>

        <!-- Super Tag -->
        <?php
            # Variável 
            $nome = 'Fernando';

            echo '<h2>Hello world!</h2>';
            echo '<p>Olá, meu nome é '.$nome.'!</p>';        
        ?>

    </body>
</html>