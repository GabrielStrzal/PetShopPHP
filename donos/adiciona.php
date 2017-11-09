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
		<div class="col-md-12">

<br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr> 
				<td>Endereço</td>
				<td><input type="text" name="endereco"></td>
			</tr>
			<tr> 
				<td>Telefone</td>
				<td><input type="text" name="telefone"></td>
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