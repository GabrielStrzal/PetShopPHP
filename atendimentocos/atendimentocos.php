<?php
//including the database connection file
include_once("../config/config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM atendimentos WHERE tipo IN (SELECT id FROM servicos WHERE tipo = 'Atendimento Cosmético') ORDER BY id DESC"); // using mysqli_query instead

?>

<?php
// including the header file
include_once("../header.php");
?>

	<title>Lista de Atendimentos Cosmético</title>
</head>

<body>

<?php
// including the menu file
include_once("atendimentocos_menu.php");
?>
<br><br><br>

	<div class="container">
		<br>
		<div class="col-md-12 container panel panel-default ">	
			<h3>Lista de Atendimentos Cosmético</h3>
			<br>
			<table class="table table-striped">
				<thead class="thead-inverse">
					<tr bgcolor='#CCCCCC'>
						<th>Pet</th>
						<th>Serviço</th>
						<th>Observação</th>
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
					$row = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT nome FROM servicos WHERE id = $tipoId "));
					echo "<td> {$row['nome']} </td>";


					echo "<td>".$res['observacoes']."</td>";


					echo "<td>".$res['situacao']."</td>";


					if($res['situacao'] != 'CONCLUIDO'){
						echo "<td style='text-align:right'>
								<a href=\"edit.php?id=$res[id]\" class='btn btn-warning btn-sm'>Atender</a></td>";	
					}else{
						echo "<td style='text-align:right'>
								<a href=\"edit.php?id=$res[id]\" class='btn btn-success btn-sm'>Visualizar/Editar</a></td>";	
					}
				}
				?>
			</table>
			<br>
		</div>
	</div>
</body>
</html>