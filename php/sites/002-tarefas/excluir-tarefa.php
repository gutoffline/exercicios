<?php
$id = $_GET["id"];

include "conexao.php";

$sql = "delete from tarefas where id = $id";
mysqli_query($conexao, $sql);

header("location:index.php");

?>