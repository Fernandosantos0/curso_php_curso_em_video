<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Aula 05 - Campos</title>
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                # Resgatando os valores preenchido no formulário
                $nome = isset($_GET['nome']) ? $_GET['nome'] : '[não informado]';
                $anoNasc = isset($_GET['nasc']) ? $_GET['nasc'] : date('Y');
                $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : 'M';

                # Capturando o ano atual
                $anoAtual = date('Y');
                
                # Armazenando na variável o resultado do cálculo da idade do usuário
                $idade = $anoAtual - $anoNasc;

                # Usando o operador ternário
                $sx = $sexo === 'M' ? 'masculino' : 'feminino';

                # Mostrando o resultado
                echo "Meu nome é $nome, tenho $idade anos de idade e sou do sexo $sx.";
            ?>

            <br>
            <a href="02_campos.html" target="_prev" hreflang="pt-br">Voltar</a>
        </div>
    </body>
</html>