<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 04 - Votação</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>

            <?php
                # Operadores Booleano
                // and ou && - Retorna verdade caso todas as expressões seja verdadeiras
                // or ou || - Retorna verdadeiro caso uma das expressões seja verdadeiras
                // xor - Retorna verdadeiro falso se todas as expressões seja iguais
                // not ou ! - Retorna o inverso da expressão

                # Capturando o ano pela URL da página
                $anoNascimento = $_GET['ano'];
                
                # Capturando o ano atual pelo sistena
                $anoAtual = date('Y');

                # Calculando a idade do usuário é armazenando na variável;
                $idade = $anoAtual - $anoNascimento;
                
                echo "Quem nasceu em $anoNascimento tem $idade anos de idade.";
                echo "<br>Você é obrigado a votar? " . (($idade > 17 and $idade < 70) ? 'SIM' : 'NÃO');
            ?>

        </div>
    </body>
</html>