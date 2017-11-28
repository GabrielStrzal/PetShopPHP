<?php
// including the header file
include_once("../header.php");

$result_donos = mysqli_query($mysqli, "SELECT * FROM donos ORDER BY id DESC");
?> 

	<title>Adicionar Pet</title>
</head>

<body>

<?php
// including the menu file
include_once("pets_menu.php");
?>

<br><br>
<br>

<div class="container">
		<br>
			<div class="col-md-6 container panel panel-default ">

				<h3>Cadastro de Pets</h3>
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
					  		<option value="Cachorro">Cachorro</option>
					  		<option value="Gato">Gato</option>
					  		<option value="Outros">Outros</option>
						</select>
			  		</div>	
					<div class="form-group">
						<label for="sexo">Sexo</label>
						<select name="sexo" id="sexo" class="form-control">
					  		<option value="">Selecione um sexo</option>
					  		<option value="Macho">Macho</option>
					  		<option value="Fêmea">Fêmea</option>
						</select>
					</div>
					<div class="form-group">
						<label for="dono">Dono</label>
						<select name="dono" id="dono" class="form-control">
							<option value="">Selecione um Dono</option>
							<?php 
								while($res = mysqli_fetch_array($result_donos)) { 		
									echo "<option value=".$res['id'].">".$res['nome']."</option>";	
								}
							?>
						</select>
					</div>
					<button type="submit" class="btn btn-success tn-lg btn-block" name="Submit" value="Adicionar">Adicionar</button>
				</form>
				<br/>
			</div>
		</div>
	</div>
</body>
</html>