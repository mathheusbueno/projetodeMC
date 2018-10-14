<?php
	include("conecta.php");
	$ar = $_GET['ar'];
	$sql_insert = "REPLACE INTO sensores SET id=2, estado=$ar";
	mysqli_query($conexao,$sql_insert);
	if($sql_insert)
	{
  		echo "Salvo com sucesso -- Ar ";
	}
	else{

  		echo "Erro";

	}
?>
