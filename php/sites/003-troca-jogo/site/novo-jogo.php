<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Novo Jogo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="salvar-jogo.php">
                <input name="titulo" placeholder="Título" class="form-control">
                <input name="foto" placeholder="foto"class="form-control">
                <input name="video" placeholder="video"class="form-control">
                <select name="categoria"class="form-select">
                    <option value="aventura">Aventura</option>
                    <option value="Luta">Luta</option>
                </select>
                <button type="submit" class="btn btn-success">CADASTRAR</button>
            </form>
        </div>
    </div>
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>