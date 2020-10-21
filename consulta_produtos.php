<?php 
	$conecta = new PDO('mysql:host=localhost;dbname=loja', 'root', '');
	
  $sql = "select * from tbl_produto";
  
	$resultado = $conecta->prepare($sql);
	$resultado->execute();
	
	if (!$resultado) 
		print "erro de sql";
	else{
		$row = $resultado->fetchAll(PDO::FETCH_COLUMN, 0);
		print_r($row);

		$row = json_encode($row);
		print_r($row);

		if (!$row) print "inexistente";
	}
	
	$conecta->close();
?>