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

// sql to delete a record
$sql = "DELETE FROM Clientes WHERE id=5";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Cliente deletado com sucesso.</h2>";
} else {
    echo "Erro ao deletar cliente: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

Retornar a página de lista. <a href="../clientes.php">Clique aqui</a>