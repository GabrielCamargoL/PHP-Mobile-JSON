<?php 
  $conecta = mysqli_connect("localhost:3306", "root","","Loja");
	
  $sql = "select * from tbl_produtos";
  
	$resultado = $conecta->query($sql);
  if (!$resultado) print "erro de sql";
	$row = $resultado->fetch_assoc();
		
  if (!$resultado) print "erro de sql";
	else{
		$row = $resultado->fetch_assoc();
		
		if (!$row) print "inexistente";
		else
		{
			print $row["descricao"].";".$row["preco"].";".$row["quant"];
		}
	}
	
	$conecta->close();
?>