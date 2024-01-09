<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso de PHP | Tabuada</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Capturando os dados 
                $tam = isset($_POST['num']) ? $_POST['num'] : 1;

                echo "<h2>Tabuada de $tam:</h2>";

                $c = 1;
                do {
                    echo $tam . ' x ' . $c . ' = ' . ($tam * $c);
                    echo '<br>';
                    $c++;
                } while($c <= 10);
            ?>

            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>