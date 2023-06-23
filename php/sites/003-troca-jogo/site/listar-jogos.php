<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de jogos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="novo-jogo.php" class="btn btn-success">NOVO JOGO</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexao.php";
                    $sql_buscar = "select * from jogo";
                    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                    while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                    ?>
                        <tr>
                            <td> <?php echo $um_jogo["id"]; ?></td>
                            <td> <?php echo $um_jogo["titulo"]; ?> </td>
                            <td> <?php echo $um_jogo["categoria"]; ?> </td>
                            <td>
                                <a href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>">
                                    <img src="img/icone-excluir.png" width="20">
                                </a>

                                <a href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>">VER</a>
                                
                                <a href="editar-jogo.php?id=<?php echo $um_jogo["id"]; ?>">EDITAR</a>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php

$msg = $_GET['msg'] ?? "";

if ($msg == "excluido") {
?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="img/icone-excluir.png" width="24" class="rounded me-2" alt="...">
                <strong class="me-auto">ATENÇÃO</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-white">
                Jogo excluído com sucesso!
            </div>
        </div>
    </div>
<?php
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
const toastLiveExample = document.getElementById('liveToast')
const toast = new bootstrap.Toast(toastLiveExample)
toast.show()
</script>

</body>

</html>