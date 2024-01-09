<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 01 - Variáveis</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>
            <?php

                # Variáveis
                $nome = (string)'Fernando';
                $sobrenome = (string)'Santos';
                $idade = (int)23;

                echo '<p style="color: green;">Ola, meu nome é '.$nome.' '.$sobrenome.' e tenho '.$idade.' anos.'.'</p>';
            
            ?>
        </div>

    </body>
</html>