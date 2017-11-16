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
		<div class="col-md-12">

<br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input type="text" name="descricao"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
				<td><input type="text" name="tipo"></td>
			</tr>
			<tr>
				<td>Dono</td>
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
				<td></td>
				<td><input type="submit" name="Submit" value="Adicionar"></td>
			</tr>
		</table>
	</form>
	</div>
	</div>
</body>
</html>