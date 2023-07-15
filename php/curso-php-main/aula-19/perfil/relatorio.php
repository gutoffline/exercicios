<?php
require_once "dompdf/autoload.inc.php";
include_once "conexao.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();


$conteudo = "";
$conteudo .= "<table border='2' style='width:100%'>";
$conteudo .= "<tr>";
$conteudo .= "<th>Nome</th>";
$conteudo .= "<th>E-mail</th>";
$conteudo .= "<th>Profissão</th>";
$conteudo .= "<th>Instagram</th>";
$conteudo .= "<th>Linkedin</th>";
$conteudo .= "</tr>";

$sql = "select * from tb_perfil";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $conteudo .= "<tr>";
    $conteudo .= "<td>{$linha['nome']}</td>";
    $conteudo .= "<td>{$linha['email']}</td>";
    $conteudo .= "<td>{$linha['profissao']}</td>";
    $conteudo .= "<td>{$linha['instagram']}</td>";
    $conteudo .= "<td>{$linha['linkedin']}</td>";
    $conteudo .= "</tr>";
}
$conteudo .= "</table>";


$dompdf->loadHtml($conteudo);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream("relatorio.pdf");
?>