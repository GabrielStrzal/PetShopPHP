	<!-- Fixed navbar -->
	<?php
   include('session.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">PetShop</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Pets <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="pets/adiciona.php">Cadastro de Pets</a></li>
						<li><a href="pets/pets.php">Listar Pets</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Donos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="donos/adiciona.php">Cadastro de Donos</a></li>
						<li><a href="donos/donos.php">Lista</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="users/adiciona.php">Cadastro de Usuários</a></li>
						<li><a href="users/usuarios.php">Lista de Usuários</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Serviços <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Atendimento Médico</a></li>
						<li><a href="#">Atendimento Cosmético</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Contato</a></li>
				<li><a href="logout.php">Sair</a></li>
			</ul>

			<!--/.nav-collapse -->
		</div>
</nav>