    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Nova atividade</title>
    </head>
    <body>

        <h1>Variaveis</h1>
        <div class="formulario">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Nome: </p><input type="text" name="Nome"><br>
            <P>Sobrenome: </P><input type="text" name="Sobrenome"><br>
            <p>Idade: </p><input type="number" name="idade"><br>
            <p>Profissão: </p><input type="text" name="profissao">
            <input type="submit">
        </form>
        </div>
        <?php
            $nome= $_POST['Nome'];
            $sobrenome= $_POST['Sobrenome'];
            $idade= $_POST['idade'];
            $profissao= $_POST['profissao'];
            $nomeCompleto= $nome." ".$sobrenome;
            $mensagem = "Olá, meu nome é <strong>". $nomeCompleto . "</strong><br>". "<i>profissão: ". $profissao."</i>";
            echo "$mensagem";
            //Cria as variaveis cidade, dia, ano e mes e atribui os que o usuario quiser, depois atravez de concatenação e consistencia ele aparece no visor 
        ?>

    </body>
    </html>