<?php
// including the header file
include_once("../header.php");
?> 
	<title>Adicionar Pet</title>
</head>

<body>


<?php
// including the menu file
include_once("pets_menu.php");
?>

<br><br><br>


	<div class="container">
		<div class="col-md-12">

<?php
//including the database connection file
include_once("../config/config.php");

if(isset($_POST['Submit'])) {	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$descricao = mysqli_real_escape_string($mysqli, $_POST['descricao']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);
		
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO pets(nome,descricao,tipo) VALUES('$nome','$descricao','$tipo')");
		
		//display success message
		echo "<font color='green'>Adicionado com Sucesso.";
		echo "<br/><a href='pets.php'>Ver resultados</a>";
	}
}
?>

</div>
</div>
</body>
</html>
