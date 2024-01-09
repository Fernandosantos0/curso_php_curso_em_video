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
                $a = isset($_GET['ano']) ? $_GET['ano'] : 1900;
                $i = date('Y') - $a;
                echo "Você nasceu em $a e tera $i anos. <br>";

                # Estrutura condicional
                if($i < 16) {
                    $tipoVoto = 'não vota';
                } else {
                    if($i >= 16 && $i < 18 || $i > 70) {
                        $tipoVoto = 'voto opcional';
                    } else {
                        $tipoVoto = 'voto obrigatório';
                    }
                }

                echo "Para essa idade, $tipoVoto.";
            ?>
        </div>
    </body>
</html>