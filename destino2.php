<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grid.css">
    <title>Classificaçao do IMC</title>
</head>
<body>
    <div class="container2">
    <header>
        <h1>Calculo do imc</h1>
    </header>
<?php
    include "util.php";

    $Altura = $_POST ["Altura"];
    $Peso = $_POST ["Peso"];

    $IMC = number_format(calcIMC($Altura, $Peso),2);
    $classif= calcClass($IMC);
?>
    <table>
        <thead>
            <tr>
                <th>IMC</th>
                <th>Clasificação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$IMC ?></td>
                <td><?=$classif ?></td>
            </tr>
        </tbody>
    </table> 
    <footer>
        <h1>Feito por matheus deanin</h1>
    </footer>
    </div>
</body>
</html>

