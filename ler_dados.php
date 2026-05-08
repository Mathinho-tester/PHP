
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grid.css">
    <title>Document</title>
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
    echo "    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ra</th>
            </tr>
        </thead>";
    while($linha = $select->fetch()){
        echo "
        <tbody>
            <tr>
                <td>".$linha['nome']."</td>
                <td>".$linha['ra']."</td>
            </tr>
        </tbody>
    ";
    }
        echo "</table>";

?>

</body>
</html>