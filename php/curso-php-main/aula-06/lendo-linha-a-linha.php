<ul>
<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo,"r");
while(!feof($arquivo)){
    $linha = fgets($arquivo, 100);
    echo "<li>$linha</li>";
}

fclose($arquivo);
?>
</ul>


<table border=2>
    <thead>
        <tr>
            <th>Nome e Idade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomearquivo = "clientes.txt";
        $arquivo = fopen($nomearquivo,"r");
        while(!feof($arquivo)){
            $linha = fgets($arquivo, 100);
            echo "<tr>";
            echo "<td>$linha</td>";
            echo "</tr>";
        }

        fclose($arquivo);
        ?>
    </tbody>
</table>
