<?php //exercicio 6
$matriz = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$soma = 0;
$contador = 0;

for ($i=0; $i < 9 ; $i++) { 
    
    $soma = $matriz[$contador] + $soma;
    $contador++;
}

print("O resultado da soma é: " . $soma);

// memória:
// console: O resultado da soma é: 45
