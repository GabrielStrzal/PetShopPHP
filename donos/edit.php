<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
	$telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);	
	
	// checking empty fields
	if(empty($nome) || empty($endereco) || empty($telefone)) {	
			
		if(empty($nome)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}
		
		if(empty($endereco)) {
			echo "<font color='red'>Campo Endereço está vazio.</font><br/>";
		}
		
		if(empty($telefone)) {
			echo "<font color='red'>Campo Telefone está vazio.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE donos SET nome='$nome',endereco='$endereco',telefone='$telefone' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: donos.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM donos WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$endereco = $res['endereco'];
	$telefone = $res['telefone'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Editar Donos</title>
</head>

<body>
<?php
// including the menu file
include_once("donos_menu.php");
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
				<td>Endereço</td>
				<td><input type="text" name="endereco" value="<?php echo $endereco;?>"></td>
			</tr>
			<tr> 
				<td>Telefone</td>
				<td><input type="text" name="telefone" value="<?php echo $telefone;?>"></td>
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
