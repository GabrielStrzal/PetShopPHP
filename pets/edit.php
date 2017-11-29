<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$descricao = mysqli_real_escape_string($mysqli, $_POST['descricao']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);	
	$dono = mysqli_real_escape_string($mysqli, $_POST['dono']);
	$sexo = mysqli_real_escape_string($mysqli, $_POST['sexo']);
	
	// checking empty fields
	if(empty($nome) || empty($descricao) || empty($tipo) || empty($dono) || empty($sexo)) {	
			
		if(empty($nome)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}
		
		if(empty($descricao)) {
			echo "<font color='red'>Campo Descrição está vazio.</font><br/>";
		}
		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}

		if(empty($dono)) {
			echo "<font color='red'>Campo Dono está vazio.</font><br/>";
		}	
		if(empty($sexo)) {
			echo "<font color='red'>Campo Sexo está vazio.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE pets SET nome='$nome',descricao='$descricao',tipo='$tipo',dono='$dono', sexo='$sexo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: pets.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM pets WHERE id=$id");
$result_donos = mysqli_query($mysqli, "SELECT * FROM donos ORDER BY id DESC");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$descricao = $res['descricao'];
	$tipo = $res['tipo'];
	$dono = $res['dono'];
	$sexo = $res['sexo'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Editar Pet</title>
</head>

<body>
<?php
// including the menu file
include_once("pets_menu.php");
?>

<br><br><br>

<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Editar Pet</h3>
				<br/>
	
				<form name="form1" method="post" action="edit.php">
					<div class="form-group">
						<label for="nome">Nome</label>
					 	<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $nome;?>">
			  		</div>
					<div class="form-group">
						<label for="descricao">Descrição</label>
					 	<input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $descricao;?>">
			  		</div>	
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
					  		<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
					  		<option value="Cachorro">Cachorro</option>
					  		<option value="Gato">Gato</option>
					  		<option value="Outros">Outros</option>
						</select>
			  		</div>	
					<div class="form-group">
						<label for="sexo">Sexo</label>
						<select name="sexo" id="sexo" class="form-control">
					  		<option value="<?php echo $sexo;?>"><?php echo $sexo;?></option>
					  		<option value="Macho">Macho</option>
					  		<option value="Fêmea">Fêmea</option>
						</select>
					</div>
					<div class="form-group">
						<label for="dono">Dono</label>
						<select name="dono" id="dono" class="form-control">
							<?php $row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM donos WHERE id = $dono ")); ?>
							<option value="<?php echo $dono;?>"><?php echo $row['nome'];?></option>
							<?php 
								while($res = mysqli_fetch_array($result_donos)) { 		
								echo "<option value=".$res['id'].">".$res['nome']."</option>";	
							}
							?>
						</select>
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
