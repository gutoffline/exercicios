<?php include_once "header.php"; ?>
<main class="container">
    <form action="validar.php" method="post">
        Usuário:
        <input name="usuario" required>
        <br>
        Senha:
        <input name="senha" type="password" required>
        <br>
        <button type="submit">ENTRAR</button>
    </form>
</main>
<?php include_once "footer.php"; ?>