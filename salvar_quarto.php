<?php

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Receber os dados do formulário
$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];

// Comando para inserir no banco
$sql = "INSERT INTO quartos 
        (id_hotel, numero_quarto, tipo_quarto, preco_diaria)
        VALUES ('$id_hotel','$numero_quarto','$tipo_quarto','$preco_diaria')";


// Executar
if ($stmt->execute()) {
    echo "Quarto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o quarto: " . $stmt->error;
}

// Fechar
$stmt->close();
$conexao->close();

?>