<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02 - Funções Aritmédicas</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
        <style type="text/css" rel="stylesheet">
            h2 {
                font-size: 15pt;
                color: #177;
                font-weight: bold;
                font-family: arial;
                margin: 0px;
                padding: 0px;
            }
        </style>
    </head>
    <body>
        <div>

            <?php
                # função abs - Retorna o valor absoluto
                # função pow - Cria uma potenciação
                # função sqrt - Cria uma raiz quadrada
                # função round - Retorna um valor arredondado
                # função ceil - Função para arredonda o número para cima
                # função floor - Função para arredonda o número para baixo
                # função intval - Função que pega a parte inteira de um número
                # number_format - Prmiti formatar um número

                $n1 = $_GET['x'];
                $n2 = $_GET['y'];

                echo "<h2>Valores recebidos: $n1 e $n2</h2>";

                # Retorna o valor absoluto
                echo "<br>O valor absoluto de $n2 é " . abs($n2);

                # Calcular a potenciação
                echo "<br>A potenciação de $n1<sup>$n2</sup> é " . pow($n1, $n2);

                # Retorna a raiz quadrada de um determinado número
                echo "<br>A raiz quadrada de $n2 é " . sqrt($n2);

                # Retorna o número arredondado, respeitando as regras da matemática
                echo "<br>O número arredondado de $n2 é " . round($n2);

                # Retorna o valor arredondado para cima
                echo "<br>O número arredondado para cima de $n2 é " . ceil($n2);

                # Retorna o valor arredondado para baixo
                echo "<br>O número arredondado para baixo de $n2 é " . floor($n2);

                # Retorna a parti inteira de um número
                echo "<br>A parti inteira do número $n2 é " . intval($n2);
                
                # Permite formatar a exibição do número
                echo "<br>A formatação do número $n2 é " . number_format($n2, 2, ',', '.');
            ?>

        </div>
    </body>
</html>