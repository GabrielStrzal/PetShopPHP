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
			<a class="navbar-brand" href="../index.php">PetShop</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="../index.php">Home</a></li>
				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Pets <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="adiciona.php">Cadastro de Pets</a></li>
						<li><a href="pets.php">Listar Pets</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Donos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../donos/adiciona.php">Cadastro de Donos</a></li>
						<li><a href="../donos/donos.php">Lista</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Admin <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../users/adiciona.php">Cadastro de Usuários</a></li>
						<li><a href="../users/usuarios.php">Lista de Usuários</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">Serviços <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Atendimento Médico</li>
						<li><a href="../atendimentomedico/adiciona.php">Cadastrar</a></li>
						<li><a href="../atendimentomedico/atendimentomedico.php">Listar</a></li>
						 <li class="divider"></li>
						 <li class="dropdown-header">Atendimento Cosmético</li>
						<li><a href="../atendimentocos/adiciona.php">Cadastrar</a></li>
						<li><a href="../atendimentocos/atendimentocos.php">Listar</a></li>
						 <li class="divider"></li>
						 <li class="dropdown-header">Serviços</li>
						<li><a href="../servicos/adiciona.php">Cadastrar</a></li>
						<li><a href="../servicos/servicos.php">Listar</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../sobre.php">Sobre</a></li>
				<li><a href="../logout.php">Sair</a></li>
			</ul>

			<!--/.nav-collapse -->
		</div>
</nav>