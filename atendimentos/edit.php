<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$pet = mysqli_real_escape_string($mysqli, $_POST['pet']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);	
	$observacoes = mysqli_real_escape_string($mysqli, $_POST['observacoes']);
	
	
	// checking empty fields
	if(empty($pet) || empty($tipo)) {	
			
		if(empty($pet)) {
			echo "<font color='red'>Campo Pet está vazio.</font><br/>";
		}
		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}

	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE atendimentos SET pet='$pet',observacoes='$observacoes',tipo='$tipo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: atendimentos.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM atendimentos WHERE id=$id");
$result_pets = mysqli_query($mysqli, "SELECT * FROM pets ORDER BY id DESC");
$result_servicos = mysqli_query($mysqli, "SELECT * FROM servicos ORDER BY id DESC");

while($res = mysqli_fetch_array($result))
{
	$pet = $res['pet'];
	$tipo = $res['tipo'];
	$observacoes = $res['observacoes'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Editar Atendimento</title>
</head>

<body>
<?php
// including the menu file
include_once("atendimentos_menu.php");
?>

<br><br><br>

<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Editar Atendimento</h3>
				<br/>
	
				<form name="form1" method="post" action="edit.php">
					<div class="form-group">
						<label for="pet">Pet</label>
					 	<select name="pet" id="pet" class="form-control">
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM pets WHERE id = $pet")); ?>
					  		<option value="<?php echo $pet;?>"><?php echo $row['nome'];?></option>
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
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM servicos WHERE id = $tipo")); ?>
					  		<option value="<?php echo $tipo;?>"><?php echo $row['nome'];?></option>
					  		<?php 
								while($res = mysqli_fetch_array($result_servicos)) { 		
								echo "<option value=".$res['id'].">".$res['nome']."</option>";	
							}
							?>

						</select>
			  		</div>	

					<div class="form-group">
						<label for="observacoes">Observações</label>
					 	<input type="text" class="form-control" name="observacoes" id="observacoes" value="<?php echo $observacoes;?>">
			  		</div>

				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" class="btn btn-success tn-lg btn-block"  value="Atualizar">
			</tr>
		</table>
	</form>
	<br>
	</div>
	</div>
</body>
</html>
