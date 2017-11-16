<?php
// including the header file
include_once("../header.php");
?> 
	<title>Cadastrar Usuários</title>
</head>

<body>


<?php
// including the menu file
include_once("usuarios_menu.php");
?>

<br><br><br>


	<div class="container">
		<div class="col-md-12">

<?php
//including the database connection file
include_once("../config/config.php");

if(isset($_POST['Submit'])) {	
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO admin(username,passcode,tipo) VALUES('$username','$passcode','$tipo')");
		
		//display success message
		echo "<font color='green'>Adicionado com Sucesso.";
		echo "<br/><a href='usuarios.php'>Ver resultados</a>";
	}
}
?>

</div>
</div>
</body>
</html>
