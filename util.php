<?php
function calcIMC($Altura, $Peso){
    $IMC= $Peso/(($Altura/100)*($Altura/100));
    return $IMC;
}
function calcClass($IMC){
    $class=$IMC;
    if( $IMC < 18.5 ){
        return $class="Abaixo do peso";
    }
    else if($IMC>=18.5 || $IMC<24.9){
        return $class="Peso normal";
    }
    else if($IMC>=24.9 || $IMC<29.9){
        return $class="Excesso de Peso";
    }
    else if($IMC>=29.9 || $IMC<34.9){
        return $class="Obesidade I";
    }
    else if($IMC>=34.9 || $IMC<39.9){
        return $class="Obesidade II";
    }
    else{
        return $class="Obesidade mórbida";
    }
}

function calcJuros($Capital, $taxa, $tempo){
    $taxaDecimal= $taxa/100;
    $Montante = $Capital * ((1 + $taxaDecimal) ** $tempo);
    return number_format($Montante,2);
}
function conecta($paramString = ""){
    if($paramString == ""){
        // BANCO DE DADOS: Garantido como 'cursos'
        $paramString = "pgsql:host=localhost;port=5432;dbname=cursos;user=postgres;password=postgres";
    }
    try{
        $c = new PDO($paramString);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "<p style='color:red;'>Erro ao conectar: " . $e->getMessage() . "</p>";
        exit;
    }
    return $c;
}
function salvaUpload($paramConn, $paramFiles, $paramCampo){
     if ( isset( $paramFiles[$paramCampo] ) ) {
            $novoId   = $paramConn->lastInsertId();
            $ext = pathinfo($paramFiles[$paramCampo]['name'],
                   PATHINFO_EXTENSION);
            $arquivoNovo = "imagens/$novoId.$ext";
            try {
               if (move_uploaded_file($paramFiles[$paramCampo]['tmp_name'], 
                   $arquivoNovo)) {
                   echo "<br>Arquivo $arquivoNovo criado com sucesso.\n";
               } 
            } catch (PDOException $e) {
               echo "Erro, verifique o arquivo se a pasta imagens existe";
            }     
        }
}
?>