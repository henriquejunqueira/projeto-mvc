<?php 

$dados = $viewData['dados'];

?>

<h3>Lista de Usuários</h3>
<table class="table mt-4">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Telefone</th>
			<th>Endereço</th>
			<th>Cidade</th>
			<th>UF</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($dados as $usuario){
		  $usuario instanceof Usuario;
		  $nome = $usuario->getNome();
		  $dataNascimento = $usuario->getDataNascimento();
		  $telefone = $usuario->getTelefone();
		  $endereco = $usuario->getEndereco();
		  $cidade = $usuario->getCidade();
		  $uf = $usuario->getUf();
		    
		?>
    		<tr>
    			<td><?= $nome ?></td>
    			<td><?= $dataNascimento ?></td>
    			<td><?= $telefone ?></td>
    			<td><?= $endereco ?></td>
    			<td><?= $cidade ?></td>
    			<td><?= $uf ?></td>
    		</tr>
		<?php } ?>
	</tbody>
</table>