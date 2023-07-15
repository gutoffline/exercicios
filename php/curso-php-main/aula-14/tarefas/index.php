<?php include_once "header.php"; ?>
<?php include_once "mensagens.php"; ?>
<!-- inicio conteudo -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body"> 
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<form class="d-flex justify-content-center align-items-center mb-4" action="inserir-tarefa.php" method="post">
    <div class="form-outline flex-fill me-2">
        <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
    </div>
    <div class="form-outline flex-fill">
        <select class="form-select" name="status">
            <option value="planejada">Planejada</option>
            <option value="em execução">Em execução</option>
            <option value="concluída">Concluída</option>
        </select>
    </div>
    <button type="submit" class="btn btn-outline-success ms-2 ">
        <i class="bi bi-save-fill"></i> ADD</button>
</form>

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Todas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=planejada">Planejada</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=em execução">Em execução</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?status=concluída">Concluída</a>
    </li>
</ul>

<table class="table mb-0 table-hover">
    <?php
    include "conexao.php";
    $condicao = "";
    $status = $_GET["status"] ?? "";
    
    if($status != ""){
        $condicao = "where status='$status'";
    }

    $sqlBusca = "select * from t_tarefas $condicao";
    $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
    while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    ?>
        <tr class="fw-lighter">
            <td><?php echo $umaTarefa['id']; ?></td>
            <td><?php echo $umaTarefa['descricao']; ?></td>
            <td><?php echo $umaTarefa['status']; ?></td>
            <td>
            
                <a class='btn text-success' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id']?>"><i class="bi bi-pencil-fill"></i></a>
                <a class='btn text-danger' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-trash"></i></a>
                
            </td>
        </tr>
    <?php
    }
    mysqli_close($conexao);
    ?>
</table>
<!-- fim conteudo -->
<?php include_once "footer.php"; ?>