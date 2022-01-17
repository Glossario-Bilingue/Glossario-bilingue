<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabelas</title>
	
</head>

<body>


<?php
include_once 'conexao.php';
echo"<p><title>Todas as palavras</title></p>";

$sql = ("select * from dicionario");


	echo'<table class="rTable">';
	echo "<tr>";
	echo "<th>Palavra</th>";
	echo "<th>Sigla</th>";
	echo "<th>Classe gramatical</th>";
	echo "<th>Tradução literal</th>";
	echo "<th>Tradução aplicada</th>";
	echo "<th>Plural</th>";
	echo "</tr>";
$numrow = pg_query($conexao,$sql);



while ($row = pg_fetch_array($numrow)) {
        $ptermo = $row['palavra_termo'];
        $sigla = $row['sigla'];
        $cgramatical = $row['classe_gramatical'];
        $tliteral = $row['traducao_literal'];
        $taplicada = $row['traducao_aplicada'];
		$plural =$row['plural'];


		    echo "<tr>";
		    echo "<td>".$row[1]."</td>";
		    echo "<td>".$row[2]."</td>";
		    echo "<td>".$row[3]."</td>";
		    echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "</tr>";

    }



?>
</body>
</html>