<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Stillos - Cadastro de Evento</title>

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
                            <li><a href="../mesas.php">Relatório</a></li>
                            <li><a href="mesa.php">Lançamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <h1>Cadastro de Evento</h1>
            <form  method="POST" action="cadastro-evento.php">

                <div>
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Descrição Completa">
                </div>
                <div>
                    <label for="local">Local</label>
                    <input type="text" class="form-control" id="local" name="local">
                </div>
                <div>
                    <label for="data">Data</label>
                    <input type="date" class="form-control" id="data" name="data">
                </div>
                <div>
                    <label for="endereco">Quantidade de Mesas</label>
                    <input type="number" class="form-control" id="qtd_mesas" name="qtd_mesas">
                </div>
                <br/>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>


    </body>       

</html>

