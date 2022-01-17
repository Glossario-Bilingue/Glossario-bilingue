<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>P&aacute;gina Inicial</title>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>

		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$date = date('d/m/Y', time());
		?>

		<div class="Projeto">
			<?php echo $date;?>
			<a href="..\HTML\projeto.html">Projeto</a>
			<a href="..\HTML\equipe.html">Equipe</a>
			<a href="">Contato</a>
		</div>

		<div class ="ADM">
			<a href="login.php">Admin</a>
		</div>

		<div class="Titulo">
			<h1>Projeto Glossário<h1>
			<h3>IFRS - Campus Farroupilha<h3>
		</div>

		<div class="pesquisa">
			<form action="">
				<label for="pesquisa">Pesquise um termo técnico</label>
				<input type="text" id="pesquisa" name="pesquisa">
				<button type="button" method="GET" >Buscar</button>			
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


