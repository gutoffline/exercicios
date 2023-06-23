<?php
$nome = $_POST["nome"];

include "conexao.php";

$sql = "insert into  tarefas(nome, finalizada) values('$nome','não')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:index.php");

?>