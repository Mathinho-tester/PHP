<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 1 do Segundo bimestre</title>
</head>
<body>
    <?php
        $string_conexao= "pgsql:host=localhost;port=5432;dbname=bd_aula;user=postgres;password=postgres";
        try{
            $conn= new PDO($string_conexao);
        }
        catch(PDOException $e){
            echo "Não conectou";
            exit;
        }

        $varSQL = "select *  from estudantes";
        $select = $conn ->query($varSQL);
    ?>
</body>
</html>
