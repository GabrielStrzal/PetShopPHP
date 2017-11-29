<?php
//including the database connection file
include_once("../config/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM atendimentos ORDER BY id DESC"); // using mysqli_query instead

?>

<?php
// including the header file
include_once("../header.php");
?>

	<title>Lista de Atendimentos</title>
</head>

<body>

<?php
// including the menu file
include_once("atendimentos_menu.php");
?>
<br><br><br>

	<div class="container">
		<br>
		<div class="col-md-12 container panel panel-default ">	
			<h3>Lista de Atendimentos</h3>
			<br>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr bgcolor='#CCCCCC'>
						<th>Pet</th>
						<th>Tipo</th>
						<th>Serviço</th>
						<th>Observação</th>
						<th>Preço</th>
						<th>Situação</th>
						<th style='text-align:right;'>Ações</th>
					</tr>
				</thead>
				<?php 
				//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
				while($res = mysqli_fetch_array($result)) { 		
					echo "<tr>";
					
					$petId = $res['pet'];
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM pets WHERE id = $petId "));
					echo "<td> {$row['nome']} </td>";

					$tipoId = $res['tipo'];
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT * FROM servicos WHERE id = $tipoId "));
					echo "<td> {$row['tipo']} </td>";


					$tipoId = $res['tipo'];
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM servicos WHERE id = $tipoId "));
					echo "<td> {$row['nome']} </td>";


					echo "<td>".$res['observacoes']."</td>";


					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT preco FROM servicos WHERE id = $tipoId "));
					echo "<td> {$row['preco']} </td>";

					echo "<td>".$res['situacao']."</td>";

					if($res['situacao'] != 'CONCLUIDO'){
						echo "<td style='text-align:right'>
									<a href=\"edit.php?id=$res[id]\" class='btn btn-info btn-sm'>Editar</a>
									<a href=\"delete.php?id=$res[id]\" class='btn btn-danger btn-sm' onClick=\"return confirm('Tem certeza de que deseja deletar?')\">Deletar</a>
								</td>";	
					}else{
						echo "<td style='text-align:right'><a href=\"#\" disabled class='btn btn-warning btn-sm'>CONCLUÍDO</a></td>";	
					}

					

					
				}
				?>
			</table>
			<br>
			<a href="adiciona.php" class="btn btn-success">Adicionar novo Atendimento</a><br/><br/>
		</div>
	</div>
</body>
</html>