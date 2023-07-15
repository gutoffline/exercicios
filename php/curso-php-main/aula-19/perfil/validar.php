<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

include_once "conexao.php";
$senha = md5($senha);
$sql = "SELECT * FROM tb_perfil WHERE email = '$usuario' and senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados->num_rows > 0){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("location:perfil-painel.php");
}else{
    header("location:login.php?msg=invalido");
}

?>