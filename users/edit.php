<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$passcode = mysqli_real_escape_string($mysqli, $_POST['passcode']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);	
	
	// checking empty fields
	if(empty($username) || empty($passcode) || empty($tipo)) {	
			
		if(empty($username)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}
		
		if(empty($passcode)) {
			echo "<font color='red'>Campo Senha está vazio.</font><br/>";
		}
		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE admin SET username='$username',passcode='$passcode',tipo='$tipo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: usuarios.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$passcode = $res['passcode'];
	$tipo = $res['tipo'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Editar Usuários</title>
</head>

<body>
<?php
// including the menu file
include_once("usuarios_menu.php");
?>

<br><br><br>


	<div class="container">
		<div class="col-md-12">

	<br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>Senha</td>
				<td><input type="password" name="passcode" value="<?php echo $passcode;?>"></td>
			</tr>
			<tr> 
			
			<td>Tipo</td>
			<td>
				<select name="tipo">
			  		<option value="<?php echo $tipo;?>"><?php echo $tipo;?></option>
			  		<option value="Administrativo">Administrativo</option>
			  		<option value="Funcionário">Funcionário</option>
			  		<option value="Médico Veterinário">Médico Veterinário</option>
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
