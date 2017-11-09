<?php
//including the database connection file
include_once("../config/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM pets ORDER BY id DESC"); // using mysqli_query instead
?>

<?php
// including the header file
include_once("../header.php");
?>

	<title>Lista de Pets</title>
</head>

<body>

<?php
// including the menu file
include_once("pets_menu.php");
?>
<br><br><br>

	<div class="container">
		<div class="col-md-12">


<a href="adiciona.php">Adicionar novo Pet</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nome</td>
		<td>Descrição</td>
		<td>Tipo</td>
		<td>Ações</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nome']."</td>";
		echo "<td>".$res['descricao']."</td>";
		echo "<td>".$res['tipo']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Tem certeza de que deseja deletar?')\">Deletar</a></td>";		
	}
	?>
	</table>
	</div>
	</div>
</body>
</html>