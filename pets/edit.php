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
	
	// checking empty fields
	if(empty($nome) || empty($descricao) || empty($tipo)) {	
			
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE pets SET nome='$nome',descricao='$descricao',tipo='$tipo',dono=$dono WHERE id=$id");
		
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
		<div class="col-md-12">

	<br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value="<?php echo $nome;?>"></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input type="text" name="descricao" value="<?php echo $descricao;?>"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
				<td><input type="text" name="tipo" value="<?php echo $tipo;?>"></td>
			</tr>


			<tr>
				<td>Dono</td>
			<td>
				<select name="dono">
				
				<?php
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM donos WHERE id = $dono "));
				?>

				<option value="<?php echo $dono;?>"><?php echo $row['nome'];?></option>

					<?php 
						while($res = mysqli_fetch_array($result_donos)) { 		
							echo "<option value=".$res['id'].">".$res['nome']."</option>";	
						}
					?>
				</select>
			</td>

			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Atualizar"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
</body>
</html>
