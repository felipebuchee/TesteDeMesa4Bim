<?php //exercicio 5
$matriz = [51, 98, 22, 86, 13, 29, 95, 65, 84];
$contador = 0;
    for ($x=1; $x < 10 ; $x++) { 
        print($matriz[$contador] . " ");
        $contador = $contador + 1;

        if ($contador == 3){
            print("\n");
        }

        if ($contador == 6){
            print("\n");
        }
    }

// memória:
// console:
// 51 98 22 
// 86 13 29
// 95 65 84
