<?php
$pasta = "img/";
// Montar o novo nome do arquivo !!!!!!
$nomeDoArquivo = $_FILES["arquivo"]["name"]; // pega o nome antigo
$partes = explode(".",$nomeDoArquivo); // quebra o nome antigo em array para poder pegar apenas a extensão
$nomeNovo =  round(microtime(true)) . ".". end($partes); //pega um número MICROTIME, arredonda (ROUND) e concatena com o último valor do array aonde está a extensão
// Montar o novo nome do arquivo !!!!!!

move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeNovo);

?>
<img src="<?php echo $pasta . $nomeDoArquivo; ?>">