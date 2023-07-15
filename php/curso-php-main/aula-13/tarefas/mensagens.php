<?php
$msg = $_GET['msg'] ?? "";

if($msg == "alterado"){
    echo "<div id='my-alert' class='alert alert-info alert-dismissible fade show' role='altert'>Tarefa alterada com sucesso!<button data-bs-target='#my-alert' type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
}
?>