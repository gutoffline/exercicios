<?php
include_once "sessao-login.php";
include_once "header.php";
?>
<main class="container">
    <div class="menu">
        <?php include_once "menu.php"; ?>
    </div>
    <a href="logout.php"> <?php echo $_SESSION["usuario"]; ?> [ Sair ]</a>
    <h1>Painel</h1>
</main>
<?php
include_once "footer.php";
?>
