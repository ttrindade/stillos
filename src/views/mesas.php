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

        <div class="container">
            <h1>Relatório de Mesas</h1>
            <form  method="POST" action="cadastro-mesa.php">

                <div>
                    <label for="id">Selecionar Evento</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Digite o ID do Evento">
                </div>
                <br/>
                <button type="submit" class="btn btn-default">Imprimir</button>
            </form>
        </div>

        <?php
        $host = "localhost";
        $db = "stillos";
        $user = "root";
        $pass = "";
        $con = mysqli_connect($host, $user, $pass, $db);
        $query = sprintf("SELECT id, Nome, CPF, Endereco, CEP FROM Eventos");
        $dados = mysqli_query($con, $query);

        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);

        if ($total > 0) {
            do {
                ?>
                <table style="width:100%">
                    <tr>
                        <td><?= $linha['id'] ?> </td>
                        <td><?= $linha['Nome'] ?></td>
                        <td><?= $linha['CPF'] ?></td>
                        <td><?= $linha['Endereco'] ?></td>
                        <td> <?= $linha['CEP'] ?></td>
                    </tr>
                </table>   
                <?php
            } while ($linha = mysqli_fetch_assoc($dados));
        }
        mysqli_free_result($dados);
        ?>


    </body>       
</html>