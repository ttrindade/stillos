<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stillos";


//$id = $_POST['id'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Falha na Conexão: " . mysqli_connect_error());
}

// sql to update a record
$sql = "UPDATE Clientes SET Nome = '$id', CPF= '$cpf', Endereco='$endereco', CEP='$cep' WHERE id = 1;";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Cliente alterado com sucesso.</h2>";
} else {
    echo "Erro ao alterar cliente: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

Retornar a página de lista. <a href="../clientes.php">Clique aqui</a>