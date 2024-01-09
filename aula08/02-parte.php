<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso de PHP</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <form action="02-parte2.php" method="GET">
                <?php
                    # Estrutura de repetição
                    $c = 1;
                    while($c <= 5) {
                        echo "<label for='c-v$c'>Valor $c:</label>
                        <input type='number' name='v$c' max='100' min='0' value='0' id='c-v$c'>
                        <br>";
                        $c++;
                    }
                ?>

                <input type="submit"class="btn" value="Enviar">
            </form>
        </div>
    </body>
</html>