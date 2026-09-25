<?php

require_once "conexao.php";

$id_cliente =$_POST['id_cliente'];
$quarto_id =$_POST['quarto_id'];
$data_entrada =$_POST['data_entrada'];
$data_saida =$_POST['data_saida'];

$sql ="INSERT INTO quartos (cliente_id, quarto_id, data_entrada, data_saida, total) VALUES
($id_cliente, $quarto_id, '$data_entrada', '$data_saida',100)";

if(mysqli_query($conexao, $sql)){
    echo "reserva salva com sucesso!";
}else{
    echo"Não foi possivel fazer sua reserva"
    echo"<a href='ver_quartos.php'>Tente novamente</a>";

}
?>