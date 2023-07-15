<?php include_once "header.php"; ?>
<main class="d-flex align-items-center">
    <form action="perfil-salvar.php" method="post" enctype="multipart/form-data" class="container mb-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto align-self-center">
                <h3 class="text-center">Cadastro de perfil</h3>
                <div class="row mt-1">
                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="nome" placeholder="Nome">
                            <label for="nome">Nome</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="profissao" placeholder="Profissão">
                            <label for="profissao">Profissão</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="email" placeholder="E-mail">
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                            <label for="senha">Senha</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-12">
                        <div class="form-floating mb-1">
                            <textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
                            <label for="descricao">Descrição</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-4">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="instagram" placeholder="Instagram">
                            <label for="instagram">Instagram</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="twitter" placeholder="twitter">
                            <label for="twitter">Twitter</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="facebook" placeholder="facebook">
                            <label for="facebook">Facebook</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="linkedin" placeholder="linkedin">
                            <label for="linkedin">Linkedin</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" name="youtube" placeholder="youtube">
                            <label for="youtube">Youtube</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-2">
                        <label for="Foto">Envie sua foto</label>
                    </div>
                    <div class="col-10">
                        <input type="file" class="form-control" name="Foto" placeholder="Foto">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fundo" id="fundo1" value="img/fundo01.jpg" checked>
                            <label class="form-check-label" for="fundo1">
                                Imagem de fundo 01
                                <img src="img/fundo01.jpg" class="img-fluid">
                            </label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fundo" id="fundo2" value="img/fundo02.jpg">
                            <label class="form-check-label" for="fundo2">
                                Imagem de fundo 02
                                <img src="img/fundo02.jpg" class="img-fluid">
                            </label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fundo" id="fundo3" value="img/fundo03.jpg">
                            <label class="form-check-label" for="fundo3">
                                Imagem de fundo 03
                                <img src="img/fundo03.jpg" class="img-fluid">
                            </label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fundo" id="fundo4" value="img/fundo04.jpg">
                            <label class="form-check-label" for="fundo4">
                                Imagem de fundo 04
                                <img src="img/fundo04.jpg" class="img-fluid">
                            </label>
                        </div>
                    </div>

                </div>

            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg w-25 mt-3">Cadastrar</button>
            </div>
        </div>
    </form>
</main>
<?php include_once "footer.php"; ?>