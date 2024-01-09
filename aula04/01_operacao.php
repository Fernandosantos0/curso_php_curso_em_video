<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 04 - Operação</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Capturando o valor pela URL da página
                $n1 = $_GET['a'];
                $n2 = $_GET['b'];
                $tipo = $_GET['opc'];

                echo "Os valores passados foram $n1 e $n2<br>";

                $r = $tipo === 's' ? $n1 + $n2 : $n1 * $n2;

                echo "O resultado será $r";            
            ?>
        </div>
    </body>
</html>