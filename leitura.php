<?php
$conexao = new PDO('mysql:host=localhost;dbname=confeitaria; charset=utf8', "root",""); //conexão do PHP ao BD
$sql = "select nome,email,telefone,cpf,senha from email";
$consulta = $conexao->query($sql);
$consulta->bindParam(":email",$email);
$consulta->bindParam(":senha",$senha);
$consulta->execute();
echo"<script> window.location='';</script>";
?>