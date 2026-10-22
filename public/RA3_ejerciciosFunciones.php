<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$operacion = $datos[0]
$numero1 = $datos[1]
$numero2 = $datos[2]

if(count($datos)<2){
    echo '<p>(Error) No dispongo de suficientes argumentos.</p>';
}

function suma(int $numero1, int $numero2) : int{
    return $numero1 + $numero2;
} 


function media(int $numero1, int $numero2) : int{
    return suma($numero1, $numero2)/2;
} 
if($operacion = 'suma'){
    $resultado = suma($numero1, $numero2);
   echo "El resultado de la suma es: $resultado";
}elseif ($operacion = 'suma'){
    
}

?>