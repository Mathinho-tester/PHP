<?php
    include "util.php";
    $Capital = $_POST["Capital"];
    $Taxa = $_POST["Taxa"];
    $Tempo = $_POST["Tempo"];

    $Montante= calcJuros($Tempo, $Taxa, $Capital);

    echo "$Montante";
?>
