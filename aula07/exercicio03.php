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
                # Capturando os dados
                $sigla = isset($_POST['estado']) ? $_POST['estado'] : 'a';

                switch($sigla) {
                    case 'ac': 
                    case 'ro';
                    case 'am': 
                    case 'rr';
                    case 'pa': 
                    case 'ap';
                    case 'to':
                        echo "Você mora na <span class='foco'>Região Norte</span>"; 
                        break;
                    case 'ma': 
                    case 'pi';
                    case 'ba': 
                    case 'se';
                    case 'al': 
                    case 'pe';
                    case 'pb': 
                    case 'rn';
                    case 'ce': 
                        echo "Você mora na <span class='foco'>Região Nordeste</span>"; 
                        break;
                    case 'es';
                    case 'mg':
                    case 'rj':
                    case 'sp':
                        echo "Você mora na <span class='foco'>Região Sudeste</span>"; 
                        break;
                    case 'rs';
                    case 'sc':
                    case 'pr':
                        echo "Você mora na <span class='foco'>Região Sul</span>"; 
                        break;
                    case 'mt';
                    case 'ms':
                    case 'go':
                    case 'df':
                        echo "Você mora na <span class='foco'>Região Centro-Oeste</span>"; 
                        break;   
                    default:
                        echo "<span class='foco'>Houve algum erro</span>";                     
                }
            ?>

            <br>
            <a href="javascript:history.go(-1)" class="btn">Voltar</a>
        </div>
    </body>
</html>