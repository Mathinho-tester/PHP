<?php
    $usuario = $_POST["idusuario"];
    $idplaylist = $_POST["idplaylist"];
    $nomemusica = $_POST["Nome_musica"];
    $idVideo = $_POST["v"];
    $link = "https://www.youtube.com/watch?v=$idvideo";
     
    echo "O $usuario adicionou na $idplaylist a musica: $nomemusica com o id: $idVideo";
?>