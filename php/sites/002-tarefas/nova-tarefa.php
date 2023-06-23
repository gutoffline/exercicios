<?php
include "cabecalho.php";
?>
<h1>Nova tarefa</h1>
<p><a href="index.php">voltar</a></p>
<form method="post" action="salvar-tarefa.php">
    <input name="nome" placeholder="Nome da tarefa"><br>
    <button type="submit">Salvar</button>
</form>
<?php
include "rodape.php";
?>