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

<br><br>
<br>

	<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Cadastro de Serviços</h3>
				<br/>

				<form action="add.php" method="post" name="form1">
					<div class="form-group">
						<label for="nome">Nome</label>
					 	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			  		</div>
					<div class="form-group">
						<label for="descricao">Descrição</label>
					 	<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
			  		</div>		
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
					  		<option value="">Selecione um tipo</option>
					  		<option value="Atendimento Médico">Atendimento Médico</option>
					  		<option value="Atendimento Cosmético">Atendimento Cosmético</option>
						</select>
			  		</div>	
					<div class="form-group">
						<label for="preco">Preço</label>
						<input type="text" class="form-control" name="preco" id="preco" placeholder="Preço"/>
					</div>
					<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit" value="Adicionar">Adicionar</button>
				</form>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>