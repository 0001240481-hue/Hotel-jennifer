<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];


$sql = "INSERT INTO hoteis (nome, cidade, estrelas)
VALUES ('$nome', '$cidade', '$estrelas')";

if(mysqli_query($conexao, $sql)){
 echo "hotel cadastrado com sucesso";
 
}else{
echo"Erro ao cadastrar";
}
?>