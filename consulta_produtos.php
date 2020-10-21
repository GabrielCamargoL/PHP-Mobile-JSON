<?php 
	$conecta = new PDO('mysql:host=localhost;dbname=loja', 'root', '');
	
  $sql = "select * from tbl_produto";
  
	$resultado = $conecta->prepare($sql);
	$resultado->execute();
	
	if (!$resultado) 
		print "erro de sql";
	else{
		$row = $resultado->fetchAll();
		$row = json_encode($row);
		print($row);

		if (!$row) print "inexistente";
	}
	
	$conecta->close();
?>