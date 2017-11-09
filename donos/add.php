<?php
// including the header file
include_once("../header.php");
?> 
	<title>Adicionar Donos</title>
</head>

<body>


<?php
// including the menu file
include_once("donos_menu.php");
?>

<br><br><br>


	<div class="container">
		<div class="col-md-12">

<?php
//including the database connection file
include_once("../config/config.php");

if(isset($_POST['Submit'])) {	
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO donos(nome,endereco,telefone) VALUES('$nome','$endereco','$telefone')");
		
		//display success message
		echo "<font color='green'>Adicionado com Sucesso.";
		echo "<br/><a href='donos.php'>Ver resultados</a>";
	}
}
?>

</div>
</div>
</body>
</html>
