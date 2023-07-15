<?php
include "conexao.php";
$id = $_GET['id'];
$sqlExcluir = "delete from t_tarefas where id = $id";
mysqli_query($conexao, $sqlExcluir);
mysqli_close($conexao);
header("location: index.php?msg=excluido");
?>