<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="salvar-usuario.php">
                <div class="mb-2 col-4">
                    <input name="nome" required placeholder="Nome" class="form-control">
                </div>
                <div class="mb-2 col-4">
                    <input name="email" type="email" required placeholder="E-mail" class="form-control">
                </div>
                <div class="mb-2 col-4">
                    <input name="senha" type="password" required placeholder="Senha" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success">Salvar usuário</button>
                </div>
            </form>
        </div>
    </div>
    <?php

    $msg = $_GET['msg'] ?? "";

    if ($msg == "sucesso") {
    ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="img/icone.png" width="24" class="rounded me-2" alt="...">
                    <strong class="me-auto">ATENÇÃO</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-white">
                    Usuário cadastrado com sucesso!
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