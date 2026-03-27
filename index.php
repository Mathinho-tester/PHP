<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela PHP</title>
</head>
<body>
    
</body>
</html>
<?php
#Ana Beatriz N°1
#Matheus Deanin N°23
    $nome="Ana Beatriz";
    $cel=14997498483;
    $nota1=8;
    $nota2=7;
    $media=($nota1+$nota2)/2;
    echo    "<table> 
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cel</th>
                        <th>Nota1</th>
                        <th>Nota2</th>
                        <th>Media</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>   
                        <td> $nome </td>
                        <td> $cel </td>
                        <td> $nota1 </td>
                        <td> $nota2 </td>
                        <td> $media </td>
                    </tr>
            </table>"
?>
