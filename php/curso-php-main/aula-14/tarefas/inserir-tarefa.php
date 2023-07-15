<?php
$tarefa = $_POST['tarefa'];
$status = $_POST['status'];
include "conexao.php";
$sqlGravar = "insert into t_tarefas(descricao, status) values('$tarefa','$status')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: index.php?msg=inserido");
?> 