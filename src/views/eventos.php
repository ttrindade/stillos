<html>
    <head>
        <meta charset="utf-8">
        <title>Stillos - Projeto Prático</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="painel.php">Stillos</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="clientes.php">Listar</a></li>
                            <li><a href="requests/cliente.php">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="eventos.php">Listar</a></li>
                            <li><a href="requests/evento.php">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mesas
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="mesas.php">Relatório</a></li>
                            <li><a href="requests/mesa.php">Lançamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>DESCRIÇÃO</th> 
                <th>LOCAL</th>
                <th>DATA</th>
                <th>QUANT. MESAS</th>
            </tr>

            <?php
            $host = "localhost";
            $db = "stillos";
            $user = "root";
            $pass = "";
            $con = mysqli_connect($host, $user, $pass, $db);
            $query = sprintf("SELECT id, Descricao, Local, Data, Qtd_Mesas FROM Eventos");
            $dados = mysqli_query($con, $query);

            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);

            if ($total > 0) {
                do {
                    ?>
                    <table style="width:100%">
                        <tr>
                            <td><?= $linha['id'] ?> </td>
                            <td><?= $linha['Descricao'] ?></td>
                            <td><?= $linha['Local'] ?></td>
                            <td><?= $linha['Data'] ?></td>
                            <td> <?= $linha['Qtd_Mesas'] ?></td>
                        </tr>
                    </table>   
                    <?php
                } while ($linha = mysqli_fetch_assoc($dados));
            }
            mysqli_free_result($dados);
            ?>
