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
                # Capturado os valores enviado pelo formulário
                $nota1 = isset($_GET['nota1']) ? $_GET['nota1'] : 0;
                $nota2 = isset($_GET['nota2']) ? $_GET['nota2'] : 0;

                # Cálculando a média da nota
                $media = ($nota1 + $nota2) / 2;

                # Formatando os números
                $nota1 = number_format($nota1, 1, ',');
                $nota2 = number_format($nota2, 1, ',');
                $media = number_format($media, 1, ',');

                # Estrutura condicional composta
                if($media < 5) {
                    $situacao = 'REPROVADO';
                } elseif($media >= 5 && $media <= 6.9) {
                    $situacao = 'RECUPERAÇÃO';
                } else {
                    $situacao = 'APROVADO';
                }
 
                echo "A média entre <span class='foco'>$nota1</span> e <span class='foco'>$nota2</span> é igual a <span class='foco'>$media</span><br>";
                echo "Situação do aluno: <span class='foco'>$situacao</span>";
            ?>

            <br>
            <a href="exercicio03.html" target="_prev" class="btn">Voltar</a>
        </div>
    </body>
</html>