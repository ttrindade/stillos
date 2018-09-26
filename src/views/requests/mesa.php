<!DOCTYPE html>

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
                            <li><a href="#">Lançamento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <h1>Lançamento de Mesas</h1>
            <form  method="POST" action="cadastro-mesa.php">

                <div>
                    <label for="local">Local do Evento</label>
                    <input type="text" class="form-control" id="local" name="local"">
                </div>
                <div>
                    <label for="nome">Nome do Cliente</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <br/>
                <div>
                    <label for="qtd_mesas">Quantidade de Mesas</label>
                </div>
                <br/>
                <div><label for="mesas-select">Mesas Selecionadas</label>
                    <input type="text" class="form-control" id="mesas-select" name="mesas-select" placeholder="10-20-30-35...">
                </div>
                <br/>
                <button type="submit" class="btn btn-default">Lançar</button>
            </form>
        </div>


    </body>       

</html>

