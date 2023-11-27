<?php //exercicio 9
$pessoa = [
    'nome' => 'John Doe',
    'idade' => 54,
    'altura' => 1.8,
    'formacao' => 'Físico',
    'profissão' => 'Astronauta',
    ];
    print "Teste 0: ";
    var_dump(count($pessoa));
    print "\nTeste 1: ";
    var_dump(in_array('Físico', $pessoa));
    print "\nTeste 2: ";
    var_dump(in_array('Detetive', $pessoa));
    print "\nTeste 3: ";
    var_dump(array_search('nome', $pessoa));
    print "\nTeste 4: ";
    var_dump(array_key_first($pessoa));
    print "\nTeste 5: ";
    var_dump(array_key_last($pessoa));

// console: Teste 0: int(5)

// Teste 1: bool(true)

// Teste 2: bool(false)

// Teste 3: bool(false)

// Teste 4: string(4) "nome"

// Teste 5: string(10) "profissão"
