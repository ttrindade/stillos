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
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];

        $sql = "INSERT INTO Clientes (Nome, CPF, Endereco, CEP) VALUES('$nome','$cpf','$endereco','$cep')";

        $result = mysqli_query($con, $sql);

        echo "<h2>Cadastro realizado com sucesso!</h2>";
        ?>

        Retornar a página de cadastro. <a href="cliente.php">Clique aqui</a>

    </body>


</html>

