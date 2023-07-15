<?php
echo 'Olá mundo<br>';
echo 'Guto Xavier';
/* comentário de várias linhas
http://localhost/curso-php/index.php
*/

// comentário de uma linha
print('<h1>escrevendo</h1>');

print_r('<h2>Escrevendo de novo</h2>');

$nome = 'Guto';
$idade = 36;
$altura = 1.75;
$fumante = false;

echo '<br>';
echo $nome . '<br>';
echo $idade . '<br>';
echo $altura . '<br>';
echo $fumante . '<br>';
echo 'Olá ' . $nome . ' você tem ' . $idade . ' anos';

echo '<hr>';
echo gettype($nome) . '<br>';
echo gettype($idade) . '<br>';
echo gettype($altura) . '<br>';
echo gettype($fumante) . '<br>';
$altura = '1.75';
echo gettype($altura) . '<br>';
?>