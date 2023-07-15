<?php
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Guto",36,"Santa Bárbara"],
    ["Bábara Giacobb",26,"Americana"]
);

$arquivo = fopen("dados.csv","a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");    
}

fclose($arquivo);
?>