<?php

$arquivo = fopen("clientes.txt","w");

$listaClientes = [
    [
        "nome" => "Guto",
        "idade" => 36
    ],
    [
        "nome" => "Renata",
        "idade" => 30
    ],
    [
        "nome" => "Fernanda",
        "idade" => 20
    ],
    [
        "nome" => "Renato",
        "idade" => 18
    ],
    [
        "nome" => "Fernando",
        "idade" => 25
    ]
];

for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);
?>

<a href="clientes.txt" download>Lista de clientes</a>