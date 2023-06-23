<?php
$id = $_GET["id"];
include "cabecalho.php";
include "conexao.php";
$nome = "";
$finalizada = "";

$sql = "select * from tarefas where id = $id";
$todas = mysqli_query($conexao, $sql);
while ($tarefa = mysqli_fetch_assoc($todas)) :
    $nome = $tarefa["nome"];
    $finalizada = $tarefa["finalizada"];
endwhile;
?>

<h1>Editar tarefa <?php echo $id; ?></h1>
<form action="salvar-tarefa-editada.php?id=<?php echo $id; ?>" method="post">
    <input name="nome" value="<?php echo $nome; ?>"><br>
    <select name="finalizada">
        <option value="sim" <?php if($finalizada == "sim"){ echo "selected"; } ?>>Sim</option>
        <option value="não" <?php if($finalizada == "não"){ echo "selected"; } ?>>Não</option>
    </select><br>
    <button type="submit">Salvar</button>
</form>

<?php
mysqli_close($conexao);
include "rodape.php";
?>