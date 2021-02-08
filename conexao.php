

	
<?php

$conexao=new PDO('mysql:host=localhost;dbname=confeitaria;charset=utf8',"root","");

$sql="select*from cadastro";
$consulta=$conexao->query($sql);

foreach($consulta as $linha){

	
	echo"<tr>";
	echo"<td>".$linha["nome"]."</td>";
	echo"<td>".$linha["email"]."</td>";
	echo"<td>".$linha["telefone"]."</td>";
	echo"<td>".$linha["cpf"]."</td>";
	echo"<td>".$linha["senha"]."</td>";
	
	echo"</tr>";
	
}
echo"<script>window.location='logar.php';</script>";
$conexao=null;
?>


