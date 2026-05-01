<?php
    include "util.php";
    $Capital = $_POST["Capital"];
    $Taxa = ($_POST["Taxa"]/1000);
    $Tempo = $_POST["Tempo"];

    $Montante= calcJuros($Tempo, $Taxa, $Capital);

    echo "$Montante";
?>
