<?php
$id = $_GET["id"];
$nome = $_POST["nome"];
$finalizada = $_POST["finalizada"];

include "conexao.php";

$sql = "update tarefas set nome = '$nome' , finalizada = '$finalizada' where id = $id";

mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:index.php");
?>