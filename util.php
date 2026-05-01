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
?>