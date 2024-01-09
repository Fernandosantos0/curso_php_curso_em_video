<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 04 - Situação</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>

            <?php
                # Recebendo as notas pela URL da página
                $nota1 = $_GET['n1'];
                $nota2 = $_GET['n2'];
                $nota3 = $_GET['n3'];
                $nota4 = $_GET['n4'];

                # Variável para armazenar o resultado da média do aluno
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

                # Variável para armazenar o resultado 
                $result = $media > 5.9 ? "O aluno foi APROVADO com uma média de " . number_format($media, 1) : "O aluno foi REPROVADO com uma média de " . number_format($media, 1);

                echo $result;
            ?>

        </div>
    </body>
</html>