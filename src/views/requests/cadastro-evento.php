<?php
//include_once("../../models/Conexao.php");

$con = mysqli_connect('localhost', 'root', '', 'stillos');
?>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
        $nome = $_POST['nome'];
        $local = $_POST['local'];
        $data = $_POST['data'];
        $qtd_mesas = $_POST['qtd_mesas'];

        $sql = "INSERT INTO Eventos (Descricao, Local, Data, Qtd_Mesas) VALUES('$nome','$local','$data','$qtd_mesas')";

        $result = mysqli_query($con, $sql);

        echo "<h2>Cadastro realizado com sucesso!</h2>";
        ?>
        Retornar a página de cadastro. <a href="cliente.php">Clique aqui</a>
    </body>
</html>

