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
$sql = "DELETE FROM Eventos WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Evento deletado com sucesso.</h2>";
} else {
    echo "Erro ao deletar evento: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

Retornar a página de lista. <a href="../eventos.php">Clique aqui</a>