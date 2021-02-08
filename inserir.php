

<?php
$nome=$_GET["nome"];
$email=$_GET["email"];
$telefone=$_GET["telefone"];
$cpf=$_GET["cpf"];
$senha=$_GET["senha"];

$conexao=new PDO('mysql:host=localhost;dbname=confeitaria;charset=utf8',"root","");

$sql="insert into cadastro(nome,email,telefone,cpf,senha) values(:nome,:email,:telefone,:cpf,:senha)";

$consulta=$conexao->prepare($sql);
$consulta->bindParam(":nome",$nome);
$consulta->bindParam(":email",$email);
$consulta->bindParam(":telefone",$telefone);
$consulta->bindParam(":cpf",$cpf);
$consulta->bindParam(":senha",$senha);
$consulta->execute();
echo"<script>alert('dados inseridos');</script>";
echo"<script>window.location='conexao.php';</script>";
$conexao=null;

?>