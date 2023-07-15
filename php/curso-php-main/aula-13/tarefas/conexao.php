<?php 
$servidor = '127.0.0.1';
$banco = 'bd_tarefas';
$usuario = 'root';
$senha = '';

try{
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
}catch(Exception  $e){
    echo "Erro na conexão: $e";
    exit();
} 
?>