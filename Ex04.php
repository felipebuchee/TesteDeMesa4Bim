<?php //exercicio 4
$mega_sena = [33, 4, 47, 7, 11, 25];
$aux = 0;
for($i=0; $i < 6; $i++){
for($j=0; $j < 5; $j++){
if($mega_sena[$j] > $mega_sena[$j + 1]){
$aux = $mega_sena[$j];
$mega_sena[$j] = $mega_sena[$j + 1];
$mega_sena[$j + 1] = $aux;
 }
}
}
for($i=0; $i < 6; $i++){
print($mega_sena[$i] . " - ");
}

// memória:
// console: 4 - 7 - 11 - 25 - 33 - 47 - 
