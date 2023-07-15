<?php include_once "header.php"; ?>
<h3>Alterar tarefa</h3>
<?php
$id = $_GET['id'];
$descricao = "";
$status;

include_once "conexao.php";

$sqlBusca = "select * from t_tarefas where id = $id";
$todasTarefas = mysqli_query($conexao, $sqlBusca);
while($umaTarefa = mysqli_fetch_assoc($todasTarefas)){
    $descricao = $umaTarefa['descricao'];
    $status = $umaTarefa['status'];
}

mysqli_close($conexao);
?>
<form class="d-flex justify-content-center align-items-center mb-4" action="confirmar-alteracao.php" method="post">
    <div class="form-outline flex-fill me-3">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" class="form-control"  value="<?php echo $descricao; ?>" name="descricao">
    </div>
    <div class="form-outline flex-fill">
        <select class="form-select" name="status">
            <option value="planejada" <?php echo ($status == "planejada") ? "selected" : "" ; ?>>Planejada</option>
            <option value="em execução" <?php if($status == "em execução"){ echo "selected"; }?>>Em execução</option>
            <option value="concluída" <?php if($status == "concluída"){ echo "selected"; }?>>Concluída</option>
        </select>
    </div>
    <button type="submit" class="btn btn-outline-success ms-2 ">
        <i class="bi bi-save-fill"></i> SALVAR</button>
</form>
<?php include_once "footer.php"; ?>