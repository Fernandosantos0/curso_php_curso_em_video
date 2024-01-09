<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 01 - Variáveis</title>
        <link rel="shortcut icon" href="favicon.ico" sizes="512x512" type="image/x-icon">
        <!-- css --> 
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body>

        <div>

            <?php
                # Variáveis
                $numero = (int)45;
                $nome = (string)'Fernando';
                $idade = 23;
                $nu = 'texto';
                $array = array((0) => 'Carlos', (1) => 'Miguel', (2) => 'Pedro', (10) => 'Paloma');

                # Imprimindo os dados na tela
                print_r($nome);

                // Estrutura condicional
                if(is_string($nu)) {
                    echo '<br>É um texto.';
                }

                if(is_array($array)) {
                    echo '<br>É um vetor.<br>';
                }

                print_r($array);

                echo '<br>';

                print_r($array[2]);

                echo '<br>';

                /* Realizando a concatenação de strings e variáveis */
                echo "$nome tem $idade anos!";

                echo '<br>';

                echo $nome.' tem '.$idade. ' anos!';
            ?>

        </div>

    </body>
</html>