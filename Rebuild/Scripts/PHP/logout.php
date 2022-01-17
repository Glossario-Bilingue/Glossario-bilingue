<?php
   	session_start();
   	unset($_SESSION["username"]);
   	unset($_SESSION["password"]);

	echo "Você saiu da sessão.";
   	header('Refresh: 2; URL = index.php');
			
?>