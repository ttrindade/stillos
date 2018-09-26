<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Stillos - Cadastro de Cliente</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../painel.php">Stillos</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../clientes.php">Listar</a></li>
                            <li><a href="cliente.php">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../eventos.php">Listar</a></li>
                            <li><a href="evento.php">Cadastrar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mesas
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Relatório</a></li>
                            <li><a href="#">Lançamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="container">
            <h1>Cadastro de Cliente</h1>
            <form  method="POST" action="from/cadastro-cliente.php">

                <div>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                </div>
                <div>
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
                <div>
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
                </div>
                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Av./Rua... Número">
                </div>
                <br/>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>


    </body>       

</html>


<?php
$connect = mysqli_connect('localhost', 'root', '', 'stillos');
$sql = "INSERT INTO 'Clientes'(Nome, CPF, Endereco, CEP) VALUES('$_POST[nome]','$_POST[cpf]','$_POST[endereco]','$_POST[cep]')";

$result = mysqli_query($sql);

if ($result) {

    echo("<br>Input data is succeed");
} else {

    echo("<br>Input data is fail");
}
mysqli_close($connect);
?>