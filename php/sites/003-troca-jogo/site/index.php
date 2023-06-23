    <?php
    include "cabecalho.php";
    include "menu.php";
    ?>

    <div class="container-fluid banner">
        <div id="carouselExample" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner01.jpg" class="d-block w-100" alt="The Last Of US Part II">
                </div>
                <div class="carousel-item">
                    <img src="img/banner02.jpg" class="d-block w-100" alt="hogwarts legacy">
                </div>
                <div class="carousel-item">
                    <img src="img/banner03.jpg" class="d-block w-100" alt="Horizon Forbidden West">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Jogos em destaque</h1>
            </div>
            <div class="col-12 text-center">
                <p>Aqui você encontrará os jogos mais incríveis e envolventes do momento, cuidadosamente selecionados para a sua diversão. Desafie suas habilidades, experimente novos mundos e personagens, e divirta-se como nunca antes. Com gráficos de tirar o fôlego e jogabilidade viciante, nossa seleção de jogos em destaque é perfeita para os gamers mais exigentes. Venha conferir e descubra o seu próximo jogo favorito!</p>
            </div>
        </div>
        <div class="row">
            <?php
            include "conexao.php";

            $sql_buscar = "select * from jogo";

            $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

            while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
            ?>
                <div class="col-md-3 text-center mb-4">
                    
                    <div class="card mudar">
                        <img src="<?php echo $um_jogo["foto"]; ?>" class="card-img-top" style="height: 200px; object-fit:cover">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 50px"><?php echo $um_jogo["titulo"]; ?></h5>
                            <p class="card-text"><?php echo $um_jogo["categoria"]; ?></p>
                            <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-primary">VER MAIS</a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            mysqli_close($conexao);
            ?>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2>Entre em contato</h2>
            </div>
            <div class="col-12 text-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deserunt nesciunt maiores similique esse molestias ea et voluptates voluptatem id magni cum error quo consequatur ratione sint magnam, provident quisquam!</p>
            </div>
        </div>
        <div class="row">
            <form action="inserir-contato.php" method="post">
                <div class="col">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                    </div>
                    <div class="mb-2">
                        <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" name="duvida" placeholder="Dúvida" rows="4"></textarea>
                    </div>
                    <div class="mb-2 text-center">
                        <button type="submit" class="btn btn-success w-25">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>

    </html>