<?php
//including the database connection file
include_once("../config/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM servicos ORDER BY id DESC"); // using mysqli_query instead

?>

<?php
// including the header file
include_once("../header.php");
?>

	<title>Lista de Serviços</title>
</head>

<body>

<?php
// including the menu file
include_once("servicos_menu.php");
?>
<br><br><br>

	<div class="container">
		<br>
		<div class="col-md-12 container panel panel-default ">			
			<h3>Lista de Serviços</h3>
			<br>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr bgcolor='#CCCCCC'>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Tipo</th>
						<th>Preço</th>
						<th style='text-align:right;'>Ações</th>
					</tr>
				</thead>
			<?php 
			//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
			while($res = mysqli_fetch_array($result)) { 		
				echo "<tr>";
				echo "<td>".$res['nome']."</td>";
				echo "<td>".$res['descricao']."</td>";
				echo "<td>".$res['tipo']."</td>";
				echo "<td>".$res['preco']."</td>";

				echo "<td style='text-align:right;'><a href=\"edit.php?id=$res[id]\" class='btn btn-info btn-sm'>Editar</a> <a href=\"delete.php?id=$res[id]\" class='btn btn-danger btn-sm' onClick=\"return confirm('Tem certeza de que deseja deletar?')\">Deletar</a></td>";		
			}
			?>
			</table>
			<br>
			<a href="adiciona.php" class="btn btn-success">Adicionar novo Serviço</a><br/><br/>
		</div>
	</div>
</body>
</html>