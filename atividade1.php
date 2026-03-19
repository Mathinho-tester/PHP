    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Pagina PHP</title>
    </head>
    <body>

        <h1>Titulo em html</h1>
        <div class="formulario">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Cid:</p> <input type="text" name="cid"><br>
            <p>Dia:</p> <input type="number" name="dia" min="1" max="31"><br>
            <p>Mês:</p>    
                <select name="mes">
                <option>Janeiro</option>
                <option>Fevereiro</option>
                <option>Março</option>
                <option>Abril</option>
                <option>Maio</option>
                <option>Junho</option>
                <option>Julho</option>
                <option>Agosto</option>
                <option>Setembro</option>
                <option>Outubro</option>
                <option>Novembro</option>
                <option>Dezembro</option>
            </select><br>
            <p>Ano:</p> <input type="number" name="ano"><br>
        <input type="submit">

        </form>
        </div>
        <?php
        if (isset($_POST['cid'])) {

        $cid = $_POST['cid'];
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

            if (empty($cid) || empty($dia) || empty($mes) || empty($ano)) {
                echo "Colocar todos os campos";
            }
            elseif($ano <0){
                $ano =abs($ano) . " AC";
                echo "<strong>$cid</strong>, $dia de $mes de $ano   ";
            }
            else{
            echo "<strong>$cid</strong>, $dia de $mes de $ano";
            }
        }
        
            //Cria as variaveis cidade, dia, ano e mes e atribui os que o usuario quiser, depois atravez de concatenação e consistencia ele aparece no visor 
        ?>

    </body>
    </html>