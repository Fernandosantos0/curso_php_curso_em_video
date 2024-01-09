<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso de PHP | Calculador de Fotorial</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Capturando o valor
                $vlr = isset($_POST['vlr']) ? $_POST['vlr'] : 1;
                $fatorial = 1;
                
                $c = $vlr;
                do {
                    $fatorial *= $c;
                    $c--;
                } while($c >= 1);

                echo "O fatorial de $vlr é $fatorial.";
            ?>

            <br>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>