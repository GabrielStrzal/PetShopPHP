<?php
// including the header file
include_once("../header.php");

$result_pets = mysqli_query($mysqli, "SELECT * FROM pets ORDER BY id DESC");
$result_servicos = mysqli_query($mysqli, "SELECT * FROM servicos ORDER BY id DESC");
?> 

	<title>Adicionar Atendimento</title>
</head>

<body>

<?php
// including the menu file
include_once("atendimentos_menu.php");
?>

<br><br>
<br>

<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Cadastro de Atendimento</h3>
				<br/>

				<form action="add.php" method="post" name="form1">
					<div class="form-group">
						<label for="pet">Pets</label>
						<select name="pet" id="pet" class="form-control">
							<option value="">Selecione um Pet</option>
							<?php 
								while($res = mysqli_fetch_array($result_pets)) { 		
									echo "<option value=".$res['id'].">".$res['nome']."</option>";	
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="tipo">Serviço</label>
						<select name="tipo" id="tipo" class="form-control">
					  		<option value="" >Selecione um serviço</option>
					  		<?php 
								while($res = mysqli_fetch_array($result_servicos)) { 		
									echo "<option value=".$res['id'].">".$res['nome']."</option>";	
								}
							?>
						</select>
			  		</div>
			  		<div class="form-group">
						<label for="observacoes">Observações</label>
					 	<input type="text" class="form-control" name="observacoes" id="observacoes" placeholder="Observações">
			  		</div>	
					<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit" value="Adicionar">Adicionar</button>
				</form>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>