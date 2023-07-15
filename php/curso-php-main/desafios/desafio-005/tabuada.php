<?php
$numero = $_POST["numero"];

for($i=0; $i <= 10; $i++){
    $total = $i * $numero;
    echo "$i x $numero = $total <br>";
}
