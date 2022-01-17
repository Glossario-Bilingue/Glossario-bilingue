<?php
$conexao=pg_connect("host=localhost dbname=login user=postgres password=@Pos_987# port=5432");
if(!$conexao){
echo"Falha na conexão com o banco. Veja detalhes técnicos:";
}
?>