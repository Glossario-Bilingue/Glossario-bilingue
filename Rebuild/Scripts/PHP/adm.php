<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Administrador</title>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>

		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d/m/Y', time());
		?>

		<div class="Utilitarios">
			<?php echo $date;?>
			<a href="">Usuários</a>
			<a href ="logout.php">Logout</a>
		</div>
		


		<div class="Titulo">
			<h1>Projeto Glossário<h1>
			<h3>Página do Administrador<h3>
		</div>

		<div class="Pesquisar">
			<form action="">
				<label for="pesquisa">Pesquise um termo técnico</label>
				<input type="text" id="pesquisa" name="pesquisa">
				<button type="button" method="GET" >Buscar</button>			
			</form>		
		</div>

		<div class="Inserir">
			<form action="">
				<button type="button" method="GET" >Inserir novo termo técnico</button>			
			</form>		
		</div>

		<div class="DB">
			<iframe class="showdb" src="showDB.php"></iframe>
		</div>
		
	
		<div class="alfabeto">
			<a href="">A</a>
		</div>
	</body>
	<footer>
		&copy; Copyright 2021
	</footer>
</html>