<?php 
 $arreglo = [1,2,3,4,20,6,7,8,9,10,11,12,13,14,15,16,17,18,19,5];
 $numeroMayor=0;
 $indice=0;
 for($i=0;$i<count($arreglo);$i++){
    echo $arreglo[$i]." ";
    if($arreglo[$i]>$numeroMayor){
        $numeroMayor =$arreglo[$i];
        $indice = $i;
    }
    
 }
  echo "<br>"."el numero mayor es: ".$numeroMayor." y esta en el Indice: ".$indice;

?>