<?php
// including the header file
include_once("header.php");
?> 

	<title>Adicionar Pet</title>
</head>

<body>

<?php
// including the menu file
include_once("menu.php");
?>

<br><br>
<br>
	<a href="index.php">Home</a>
	<br/><br/>

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
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>