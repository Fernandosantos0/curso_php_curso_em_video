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
            <?php
                $i = 1;
                while($i <= 5) {
                    $v = 'num' . $i;
                    $url = 'v' . $i;
                    $$v  = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                }

                $i = 1;
                while($i <= 5) {
                    $v = 'num'.$i;
                    echo "Valor $i: " . $$v . '<br>';
                    $i++;
                }
            ?>
        </div>
    </body>
</html>