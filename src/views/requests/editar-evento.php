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
$sql = "UPDATE Eventos SET Descricao= '$nome', Local= '$local', Data='$data', Qtd_Mesas='$qtd_mesas' WHERE id = 1;";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Evento alterado com sucesso.</h2>";
} else {
    echo "Erro ao alterar evento: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

Retornar a página de lista. <a href="../eventos.php">Clique aqui</a>