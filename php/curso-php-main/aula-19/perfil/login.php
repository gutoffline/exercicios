<?php include_once "header.php"; ?>
<main class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h1 class="card-title text-center mb-2 fw-light fs-3">Área Restrita</h1>
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Preencha os campos para entrar</h5>
                        <form method="post" action="validar.php">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="usuario" id="usuario" placeholder="Usuário">
                                <label for="usuario">Usuário</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
                                <label for="senha">Senha</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">ACESSAR SISTEMA</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php include_once "footer.php"; ?>