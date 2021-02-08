
<?php
$email=$_GET["email"];
$senha=$_GET["senha"];

$conexao=new PDO('mysql:host=localhost;dbname=confeitaria;charset=utf8',"root","");
$sql="select*from cadastro where email=:email and senha=:senha";

$consulta=$conexao->prepare($sql);
$consulta->bindParam(":email",$email);
$consulta->bindParam(":senha",$senha);
$consulta->execute();

$linha=$consulta->fetch(PDO::FETCH_ASSOC);
$email=$linha["email"];
$senha=$linha["senha"];

if($email==$email && $senha==$senha &&!empty($email) &&!empty($senha)){
	session_start();                                                                                                                                                    
$SESSION["logado"]="ok";
echo"<script>window.location='pagina.php';</script>";
	
}
else 
	echo"você não tem permisão";

?>
