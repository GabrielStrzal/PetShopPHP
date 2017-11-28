<?php
// including the header file
include_once("../header.php");

$result_donos = mysqli_query($mysqli, "SELECT * FROM atendimentocos ORDER BY id DESC");
?> 

	<title>Adicionar Atendimento Cosmético</title>
</head>

<body>

<?php
// including the menu file
include_once("atendimentocos_menu.php");
?>

<br><br>
<br>

	<div class="container">
		<div class="col-md-12">

<br/>

	<form action="add.php" method="post" name="form1">
		<table width="60%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
				<td>
					<select name="tipo">
				  		<option value="">Selecione um tipo</option>
				  		<option value="Banho">Banho</option>
				  		<option value="Tosa">Tosa</option>
				  		<option value="Outros">Outros</option>
					</select>
				</td>
			</tr>

			<tr> 
				<td>Pet</td>
				<td>
					<select name="sexo">
				  		<option value="">Selecione um sexo</option>
				  		<option value="Macho">Macho</option>
				  		<option value="Fêmea">Fêmea</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Atendente</td>
				<td>
					<select name="dono">
					<option value="">Selecione um Dono</option>
						<?php 
							while($res = mysqli_fetch_array($result_donos)) { 		
								echo "<option value=".$res['id'].">".$res['nome']."</option>";	
							}
						?>
					</select>
				</td>

			</tr>
			<tr> 
				<td>Descrição</td>
				<td><textarea name="descricao" rows="3" cols="70">Teste.</textarea></td>
			</tr>


			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Adicionar"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
</body>
</html>