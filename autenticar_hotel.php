<?php
require_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO clientes (email,senha)
VALUES ('$email','$senha')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>