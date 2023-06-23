<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from jogo where id = $id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    $titulo = $um_jogo["titulo"];
    $categoria = $um_jogo["categoria"];
    $video = $um_jogo["video"];
    $foto = $um_jogo["foto"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Detalhes do jogo Cód.: <?php echo $id;?> </h6>
        </div>
        <div class="col-12">
            <h3>Título: <?php echo $titulo; ?> </h3>
            <p><img src="<?php echo $foto;?>" width="300"></p>
            <p>Categoria: <?php echo $categoria; ?></p>
            <p><a href="<?php echo $video;?>">Ver o vídeo</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>