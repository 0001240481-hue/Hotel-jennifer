<?php

require_once "conexao.php";

$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "SELECT * FROM clientes WHERE email ='$email'and senha=;
'$senha'";
$resultado = mysqli_query($conexao,$sql);

if (mysqli_num_rows ($resultado) > 0) {

$cliente =
mysqli_fetch_assoc($resultado);


if($senha == $cliente ["senha"]){

session_start();
$_SESSION["email"] = $email;

header("location:minhas_reservas.php");

}else {
    echo"senha incorreta"
    echo"<a
    href='login.html'> voltar para o login</a>";
}



}else {
    echo"E_mail não encontrado!";
    echo"<a href='login.html'>Voltar para o login</a>";
}
?>