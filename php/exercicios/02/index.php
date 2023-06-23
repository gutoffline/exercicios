<table border="1">
	<thead>
		<tr>
			<th>Nome</th><th>Telefone</th><th>E-mail</th><th>País</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$arquivo = fopen("contatos.txt","r");
		while(($dados = fgetcsv($arquivo,100,";"))!=FALSE){
			echo "<tr>";
			foreach($dados as $campo){
				echo "<td>$campo</td>";
			}
			echo "</tr>";
		}
		fclose($arquivo);
		?>
	</tbody>
</table>