<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 05 - Raiz Quadrada</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        
        <div>
            <?php
                # Capturar o valor passado pelo formulário
                $num = $_GET['num'];

                echo "A raiz quadrada do número $num é igual a " . number_format(sqrt($num), 2); 
            ?>
            
            <br>
            <a href="01_raizquadrada.html" target="_prev" hreflang="pt-br">Voltar</a>
        </div>

    </body>
</html>