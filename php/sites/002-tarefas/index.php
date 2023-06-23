<?php
include "cabecalho.php";
include "conexao.php";
?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10">

                <div class="card">
                    <div class="card-header p-3">
                        <h5 class="mb-0"><i class="bi-list-check me-2"></i>Controle de tarefas</h5>
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Pessoa</th>
                                    <th scope="col">Tarefa</th>
                                    <th scope="col">Finalizada</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select * from tarefas";
                                $todas = mysqli_query($conexao, $sql);
                                while ($tarefa = mysqli_fetch_assoc($todas)) :
                                ?>
                                    <tr class="fw-normal">
                                        <th>
                                            <img src="https://conteudo.imguol.com.br/c/colunas/fa/2022/02/28/batsy-abre-1-1646038184536_v2_4x3.jpg" class="shadow-1-strong rounded-circle" alt="avatar 1" style="width: 55px; height: 55px; object-fit:cover;">
                                            <span class="ms-2">Bruce Wayne</span>
                                        </th>
                                        <td class="align-middle">
                                            <span><?php echo $tarefa["id"]; ?> - <?php echo $tarefa["nome"]; ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <h6 class="mb-0"><span class="badge <?php if($tarefa["finalizada"] == "sim"){ echo "bg-success";}else{ echo "bg-danger" ; }?>"><?php echo $tarefa["finalizada"]; ?></span></h6>
                                        </td>
                                        <td class="align-middle">
                                            <a href="editar-tarefa.php?id=<?php echo $tarefa["id"]; ?>" data-mdb-toggle="tooltip" title="Done"><i class="bi bi-pencil-fill text-warning me-3"></i></a>
                                            <a href="excluir-tarefa.php?id=<?php echo $tarefa["id"]; ?>" data-mdb-toggle="tooltip" title="Remove"><i class="bi-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    
                                <?php
                                endwhile;
                                ?>

                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer text-end p-3">
                        <a href="nova-tarefa.php" class="btn btn-primary">adicionar nova tarefa</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
mysqli_close($conexao);
include "rodape.php";
?>