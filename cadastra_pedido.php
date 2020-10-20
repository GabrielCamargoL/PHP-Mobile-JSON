<?php
	$preco_total = urldecode ($_POST ['preco_total']);
	$produtos = urldecode ($_POST ['produto']);

	
	
	$conecta = mysqli_connect ("localhost:3306", "root","","Loja");
	
  $sql = "insert into tbl_pedido(produtos, preco_total) 
          values ('$produtos', '$preco_total')";

	$resultado = mysqli_query ($conecta,$sql);
	if(!$resultado) print "erro na tentativa de inserção";
	else
    print "inserido com sucesso";
    
	mysqli_close ($conecta);
	
	
?>