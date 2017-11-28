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

<br><br>
<br>

	<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Cadastro de Donos</h3>
				<br/>

				<form action="add.php" method="post" name="form1">
					<div class="form-group">
						<label for="nome">Nome</label>
					 	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			  		</div>
					<div class="form-group">
						<label for="endereco">Endereço</label>
					 	<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereco">
			  		</div>		
					<div class="form-group">
						<label for="telefone">Telefone</label>
					 	<input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone">
			  		</div>	
					<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit" value="Adicionar">Adicionar</button>
				</form>
				<br/>
			</div>
		</div>
		
	</div>
</body>
</html>