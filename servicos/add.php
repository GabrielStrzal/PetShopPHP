<?php
// including the header file
include_once("../header.php");
?> 
	<title>Adicionar Serviços</title>
</head>

<body>


<?php
// including the menu file
include_once("servicos_menu.php");
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
	$preco = mysqli_real_escape_string($mysqli, $_POST['preco']);
		
	// checking empty fields
	if(empty($nome) || empty($descricao) || empty($tipo) || empty($preco)) {
				
		if(empty($nome)) {
			echo "<font color='red'>Campo Nome está vazio.</font><br/>";
		}
		
		if(empty($descricao)) {
			echo "<font color='red'>Campo Descrição está vazio.</font><br/>";
		}
		
		if(empty($tipo)) {
			echo "<font color='red'>Campo Tipo está vazio.</font><br/>";
		}

		if(empty($preco)) {
			echo "<font color='red'>Campo Preço está vazio.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();' class='btn btn-warning'>Voltar</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO servicos(nome,descricao,tipo,preco) VALUES('$nome','$descricao','$tipo','$preco')");
		
		//display success message
		echo "<a href='#' class='btn btn-block btn-success disabled'>Adicionado com Sucesso.</a>";
		echo "<br/><a href='servicos.php' class='btn btn-primary'>Ver resultados</a>";
	}
}
?>

</div>
</div>
</body>
</html>
