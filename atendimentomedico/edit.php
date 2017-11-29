<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$pet = mysqli_real_escape_string($mysqli, $_POST['pet']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);	
	$observacoes = mysqli_real_escape_string($mysqli, $_POST['observacoes']);
	$parecer = mysqli_real_escape_string($mysqli, $_POST['parecer']);
	
	
	// checking empty fields
	if(empty($pet) || empty($tipo) || empty($parecer)) {	
			
		if(empty($pet)) {
			echo "<font color='red'>Campo Pet está vazio.</font><br/>";
		}
		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}

		if(empty($parecer)) {
			echo "<font color='red'>Campo Parecer está vazio.</font><br/>";
		}

	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE atendimentos SET pet='$pet',observacoes='$observacoes',tipo='$tipo',parecer='$parecer',situacao='CONCLUIDO' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: atendimentomedico.php");
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
	$parecer = $res['parecer'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Atender Serviço</title>
</head>

<body>
<?php
// including the menu file
include_once("atendimentomedico_menu.php");
?>

<br><br><br>

<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Atender Serviço</h3>
				<br/>
	
				<form name="form1" method="post" action="edit.php">
					<div class="form-group">
						<label for="pet">Pet</label>
					 	<select name="pet" id="pet" class="form-control" readonly>
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM pets WHERE id = $pet")); ?>
					  		<option value="<?php echo $pet;?>"><?php echo $row['nome'];?></option>
						</select>
			  		</div>
					<div class="form-group">
						<label for="tipo">Serviço</label>
						<select name="tipo" id="tipo" class="form-control" readonly>
					  		<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM servicos WHERE id = $tipo")); ?>
					  		<option value="<?php echo $tipo;?>"><?php echo $row['nome'];?></option>
						</select>
			  		</div>	

					<div class="form-group">
						<label for="observacoes">Observações</label>
					 	<input type="text" class="form-control" name="observacoes" id="observacoes" value="<?php echo $observacoes;?>">
			  		</div>

			  		<div class="form-group">
						<label for="parecer">Parecer</label>
						<textarea class="form-control" rows="5" name="parecer" id="parecer"><?php echo $parecer;?></textarea>
			  		</div>

				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" class="btn btn-success tn-lg btn-block"  value="Finalizar">
			</tr>
		</table>
	</form>
	<br>
	</div>
	</div>
</body>
</html>
