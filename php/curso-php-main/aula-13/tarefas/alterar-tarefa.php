<?php include_once "header.php"; ?>
<h3>Alterar tarefa</h3>
<?php
$id = $_GET['id'];
$descricao = "";

include_once "conexao.php";

$sqlBusca = "select * from t_tarefas where id = $id";
$todasTarefas = mysqli_query($conexao, $sqlBusca);
while($umaTarefa = mysqli_fetch_assoc($todasTarefas)){
    $descricao = $umaTarefa['descricao'];
}

mysqli_close($conexao);
?>
<form class="d-flex justify-content-center align-items-center mb-4" action="confirmar-alteracao.php" method="post">
    <div class="form-outline flex-fill">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" class="form-control"  value="<?php echo $descricao; ?>" name="descricao">
    </div>
    <button type="submit" class="btn btn-outline-success ms-2 ">
        <i class="bi bi-save-fill"></i> SALVAR</button>
</form>
<?php include_once "footer.php"; ?>