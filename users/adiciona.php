<?php
// including the header file
include_once("../header.php");
?> 

	<title>Adicionar Usuários</title>
</head>

<body>

<?php
// including the menu file
include_once("usuarios_menu.php");
?>

<br><br>
<br>

	<div class="container">
		<div class="col-md-12">

<br/>

	<form action="add.php" method="post" name="form1">
		<table width="35%" border="0">
			<tr> 
				<td>Nome de Usuário</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Senha</td>
				<td><input type="password" name="passcode"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
			<td>
				<select name="tipo">
			  		<option value="">Selecione um tipo</option>
			  		<option value="Administrativo">Administrativo</option>
			  		<option value="Funcionário">Funcionário</option>
			  		<option value="Médico Veterinário">Médico Veterinário</option>
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