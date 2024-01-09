<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador de números</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Capturando os valores preenchido no formulário
                $i = isset($_POST['inicio']) ? $_POST['inicio'] : 0;
                $f = isset($_POST['fim']) ? $_POST['fim'] : 0;
                $inc = isset($_POST['slc']) ? $_POST['slc'] : 1;

                # Estrutura condicional
                if($i < $f) {

                    # Estrutura de repetição
                    while($i <= $f) {
                        echo $i . '<br>';
                        $i += $inc;
                    }

                } elseif($i > $f) {

                    # Estrutura de repetição
                    while($i >= $f) {
                        echo $i . '<br>';
                        $i -= $inc;
                    }

                } else {
                    echo 'Não deu pra fazer a contagem';
                }

            ?>

            <br>
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </body>
</html>