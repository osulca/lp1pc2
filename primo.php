<?php

function esPrimo($numero): bool{
    $contador = 0;
    for($i=1;$i<=$numero;$i++){
        if($numero%$i==0){
            $contador++;
        }
    }
    if($contador==2){
        return true;
    }else{
        return false;
    }
}

$nro = 59;
if(esPrimo($nro)){
    echo "$nro es primo";
}else{
    echo "$nro no es primo";
}
