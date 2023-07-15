<?php
include_once "sessao-login.php";
include_once "header.php";
?>
<div class="menu container-fluid">
    <?php include_once "menu.php"; ?>
</div>
<main class="container">
    
    <h1>Painel</h1>

    <a href="relatorio.php" class="btn btn-primary">Relatório</a>
    
    <table class="table">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Profissão</td>
            <td>E-mail</td>
        </tr>
    </table>
</main>
<?php
include_once "footer.php";
?>
