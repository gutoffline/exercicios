<?php
include_once "conexao.php";
$nome = $_POST['nome'];
$profissao = $_POST['profissao'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$descricao = $_POST['descricao'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];
$youtube = $_POST['youtube'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$fundo = $_POST['fundo'];

/* nome foto - inicio */
$pasta = "img/";
$nomeFotoAntigo = $_FILES["Foto"]["name"];
$partes = explode(".",$nomeFotoAntigo);
$fotoNovo =  $pasta . round(microtime(true)) . ".". end($partes);
/* nome foto - fim */

move_uploaded_file($_FILES["Foto"]["tmp_name"], $fotoNovo); /* upload da foto */

$senha = md5($senha);

$sql = "insert into tb_perfil(nome, profissao, email, senha, descricao, instagram, twitter, youtube, facebook, linkedin, fundo, foto) values('$nome', '$profissao', '$email', '$senha', '$descricao', '$instagram', '$twitter', '$youtube', '$facebook', '$linkedin', '$fundo', '$fotoNovo')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location: perfil-painel.php');

?>