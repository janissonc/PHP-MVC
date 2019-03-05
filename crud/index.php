<?php 
include_once'model/Conexao.class.php';
include_once'model/Manager.class.php';
$manager = new Manager();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center"> List of Clients <i class="fa fa-users"></i></h2>

	<h5 class="text-right">
		<a href="view/page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>DT. DE NASCIMENTO</th>
					<th>ENDEREÇO</th>
					<th>TELEFONE</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listClient("registros") as $cliente): ?>
				<tr>
					<td><?php echo $cliente['id']; ?></td>
					<td><?php echo $cliente['name']; ?></td>
					<td><?php echo $cliente['email']; ?></td>
					<td><?php echo $cliente['cpf']; ?></td>
					<td><?php echo date("d/m/Y", strtotime($cliente['birth'])); ?></td>
					<td><?php echo $cliente['address']; ?></td>
					<td><?php echo $cliente['phone']; ?></td>
					<td>
						<form method="POST" action="view/page_update.php">

							<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
							
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/delete_cliente.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
							<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

	</div>

	<!-- Fim da Tabela -->

</div>

</body>
</html>