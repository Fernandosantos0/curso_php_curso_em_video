<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $txt = isset($_GET['t']) ? $_GET['t'] : 'Texto Generico';
            $tam = isset($_GET['tam']) ? $_GET['tam'] : '12pt';
            $cor = isset($_GET['cor']) ? $_GET['cor'] : '#000'; 
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 05 - Personalização do texto</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$txt</span>";
            ?>

            <br>
            <a href="03_estilos.html">Voltar</a>
        </div>
    </body>
</html>