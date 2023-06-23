<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de usuários</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexao.php";
                    $sql_buscar = "select * from usuario";
                    $todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
                    while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
                        ?>
                        <tr>
                            <td> <?php echo $um_usuario["id"]; ?></td>
                            <td> <?php echo $um_usuario["nome"]; ?> </td>
                            <td> <?php echo $um_usuario["email"]; ?> </td>
                            <td>Excluir usuário</td>
                        </tr>
                        <?php
                    endwhile;
                    mysqli_close($conexao);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>