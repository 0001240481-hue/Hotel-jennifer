<?php
require_once "conexao.php";

$hotel = $_POST['id_hotel'];
$numero = $_POST['numero_quarto'];
$quarto = $_POST['tipo_quarto'];
$diaria = $_POST['preco_diaria'];


$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria, disponivel)
VALUES ($hotel, '$numero', '$quarto', '$diaria', 1)";

if(mysqli_query($conexao, $sql)){
 echo "Quarto cadastrado com sucesso";
 
}else{
echo"Erro ao cadastrar";
}
?>