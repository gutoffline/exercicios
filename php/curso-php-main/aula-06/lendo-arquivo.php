<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
$conteudo = fread($arquivo,filesize($nomearquivo));
echo $conteudo;
fclose($arquivo);
?>