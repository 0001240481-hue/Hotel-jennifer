<?php

require_once "conexao.php";
$id_hotel = $_GET['hotel_id'];


$sql ="SELECT * FROM quartos WHERE hotel_db='id_hotel'";
$resultado=mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Quartos</title>

    <style>
               
        form {
            width: 540px;
            margin: 0 auto;
            padding: 35px 50px 40px;
            background:linear-gradient(135deg,#00040e,#021b4b);
            border-radius: 12px;
            box-shadow: 0 8px 20px #ffffff;
            color: aliceblue;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            margin-top: 35px;
            width: 100%;
            padding: 10px;
            background-color: #137a9c;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
        }

       button:hover{
        background-color: #1f055c;
        transform: scale(1.03);

        }
        </style>
        </head>



        <body style="backgroud-color:blue;">
            <h1 style="text-align:center;border 1px solid; backgound-color: black; color:white;">Quartos</h1>

            <table border="1" class="ver_quartos">

            <tr>

                <th>Número</th>
                <th>tipo</th>
                <th>Preço Da Diária</th>

            </tr>
              <?php
              while($quarto = mysqli_fetch_assoc($resultado)){
                echo"<tr>

                <td>".$quarto['numero']."</td>
                <td>".$quarto['tipo']."</td>
                <td>".$quarto['preco_diaria']."</td>
                </tr>";
              }
              ?>

            </table>
               

            <div class="form_container">
            <h2>Preencha para reservar um quarto</h2>

            <form action="salvar_reserva.php" method="POST">
            <label for="id_cliente">ID do cliente</label>
            <input type="number" name="id_cliente" id="id_cliente" class="caixa_respostas" require>
            <br><br>
            <label for="id_quarto">ID do quartos</label>
            <input type="number" name="id_quartos" id="id_qaurtos" class="caixa_respostas" require>
             <br><br>
           <label for="">Data de entrada</label>
            <input type="date" name="data_entrada" id="data_entrada" class="caixa_respostas" require>

           <label for="id_cliente">data de saida</label>
            <input type="date" name="data_saida" id="data_saida" class="caixa_respostas" require>
            <br><br>

            <button class="button_ver_quartos"> <b>CONFIRMAR RESERVA</b></button>
</form>
</div>
    
</body>
</html>