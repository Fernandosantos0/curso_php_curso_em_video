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
                # Capturando os valores do formulário
                $nome = isset($_POST['nome']) ? $_POST['nome'] : 'NULL';
                $sobrenome = isset($_POST{'sobrenome'}) ? $_POST['sobrenome'] : 'NULL';
                $nascimento = isset($_POST['ano']) ? $_POST['ano'] : date('Y');
                $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 'M';

                $idade = date('Y') - $nascimento;
                $sx = $sexo === 'M' ? 'masculino' : 'feminino';

                if($idade >= 18 && $idade < 70) {
                    $tipoVoto = 'voto obrigatório';
                } elseif($idade > 15 && $idade < 18 || $idade >= 70) {
                    $tipoVoto = 'voto opcional';
                } else {
                    $tipoVoto = 'não vota';
                }

                print_r("Meu nome é $nome $sobrenome, sou do sexo $sx e nasci no ano $nascimento, portanto, tenho $idade anos de idade. Meu tipo de voto é $tipoVoto.");
            
            ?>

            <br>
            <a href="exercicio04.html">Voltar</a>
        </div>
    </body>
</html>