<?php
// including the database connection file
include_once("../config/config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE servicos SET nome='$nome',descricao='$descricao',tipo='$tipo',preco='$preco' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: servicos.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM servicos WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nome = $res['nome'];
	$descricao = $res['descricao'];
	$tipo = $res['tipo'];
	$preco = $res['preco'];
}
?>
<?php
// including the header file
include_once("../header.php");
?> 
	<title>Editar Serviços</title>
</head>

<body>
<?php
// including the menu file
include_once("servicos_menu.php");
?>

<br><br><br>


	<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Editar Serviço</h3>
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
					  		<option value="Atendimento Médico">Atendimento Médico</option>
					  		<option value="Atendimento Cosmético">Atendimento Cosmético</option>
						</select>
			  		</div>
					<div class="form-group">
						<label for="preco">Preço</label>
						<input type="text" class="form-control" name="preco" id="preco" value="<?php echo $preco;?>"/>
					</div>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
					<input type="submit" name="update" class="btn btn-success tn-lg btn-block" value="Atualizar">
			</form>
			<br>
		</div>
	</div>
</body>
</html>
