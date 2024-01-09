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
                # Capturando os valores preenchidos no formulário
                $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
                $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : 'dobro';

                # Estrutura switch
                switch($operacao) {
                    case 'dobro':
                        $r = $numero * 2;
                        break;

                    case 'cubo':
                        $r = $numero ^ 3;
                        break;

                    case 'raiz':
                        $r = sqrt($numero);
                        break;

                    default:
                        echo 'Houve algum erro';
                }

                echo "O resultado da operação solicitada foi <span class='foco'>$r</span>.";
            
            ?>

            <br>
            <a href="exercicio01.html" class="btn">Voltar</a>
        </div>
    </body>
</html>