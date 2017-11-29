<?php
// including the header file
include_once("../header.php");
?> 
	<title>Adicionar Atendimento</title>
</head>

<body>


<?php
// including the menu file
include_once("atendimentos_menu.php");
?>

<br><br><br>


	<div class="container">
		<div class="col-md-12">

<?php
//including the database connection file
include_once("../config/config.php");

if(isset($_POST['Submit'])) {	
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
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();' class='btn btn-warning'>Voltar</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO atendimentos(pet,tipo,observacoes,situacao) VALUES('$pet','$tipo','$observacoes','NOVO')");
		
		//display success message
		echo "<a href='#' class='btn btn-block btn-success disabled'>Adicionado com Sucesso.</a>";
		echo "<br/><a href='atendimentos.php' class='btn btn-primary'>Ver resultados</a>";
	}
}
?>

</div>
</div>
</body>
</html>
