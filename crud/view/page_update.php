<?php

include_once'../model/Conexao.class.php';
include_once'../model/Manager.class.php';
include_once'dependencias.php';
$manager = new Manager();
$id = $_POST['id'];
?>

<h2 class="text-center">
	Page of Update <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">

	<div class="container">
		<div class="form-row">

			<?php foreach ($manager->getInfo("registros",$id) as $cliente): ?>
			
			<div class="col-md-6">
				Name: <i class="fa fa-user"></i>
				<input class="form-control" type="text" name="name" required autofocus value="<?php echo $cliente['name']?>" /><br/>
			</div>
			
			<div class="col-md-6">
				E-mail: <i class="fa fa-envelope"></i>
				<input class="form-control" type="email" name="email" required value="<?php echo $cliente['email']?>"/><br/>
			</div>
			
			<div class="col-md-4">
				cpf: <i class="fa fa-address-card"></i>
				<input class="form-control" type="text" name="cpf" required id="cpf" value="<?php echo $cliente['cpf']?>"/><br/>
			</div>

			<div class="col-md-4">
				Dt. de Nascimento: <i class="fa fa-calendar"></i>
				<input class="form-control" type="date" name="birth" required value="<?php echo $cliente['birth']?>"/><br/>
			</div>

			<div class="col-md-4">
				Telefone: <i class="fab fa-whatsapp"></i>
				<input class="form-control" type="text" name="phone" required id="phone" value="<?php echo $cliente['phone']?>"/><br/>
			</div>

			<div class="col-md-12">
				Endereço: <i class="fab fa-map"></i>
				<input class="form-control" type="text" name="address" required value="<?php echo $cliente['address']?>" /><br/>
			</div>

			<input type="hidden" name="id" value="<?php echo $id;?>">

			<div class="col-md-4">
				<?php endforeach;?>

				<button class="btn btn-warning btn-lg">
					Update Cliente <i class="fa fa-user-edit"></i>
				</button><br><br>
				
				<a href="../index.php"> 
					Voltar
				</a>

			</div>

		</div>
	</div>
	
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
		$("#phone").mask("(00) 0000-0000");
	});
</script>