<?php

$idade = $_POST["idade"];

if($idade >= 18){
    echo "Maior de idade";
}else{
    echo "Menor de idade";
}