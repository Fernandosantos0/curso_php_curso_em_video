<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício - 03 Referência</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>
            <?php
                $a = 3;
                $b = &$a; # Criando um link de referência entre variáveis
                $b += 5;

                echo "A variável A vale $a";
                echo "<br>A variável B vale $b";
            ?>
        </div>

    </body>
</html>