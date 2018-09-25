<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro de Evento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="../index.html">Stillos - Teste Prático</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cliente.html">Cliente</a></li>
                        <li><a href="#">Evento</a></li>
                        <li><a href="mesas.html">Mesas</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <h1>Cadastro de Evento</h1>
            <form action="cadastro-evento">

                <div>
                    <label for="nome-evento">Nome</label>
                    <input type="text" class="form-control" id="nome-evento" name="nome-evento">
                </div>
                <div>
                    <label for="local-evento">Local</label>
                    <input type="text" class="form-control" id="local-evento" name="local-evento">
                </div>
                <div>
                    <label for="data">Data</label>
                    <input type="text" class="form-control" id="data" name="data" placeholder="dd/mm/aaaa">
                </div>
                <div>
                    <label for="inlineFormCustomSelect">Quantidade de Mesas</label>
                    <select class="form-control" id="inlineFormCustomSelect">
                        <option selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="15">16</option>
                        <option value="15">17</option>
                        <option value="15">18</option>
                        <option value="15">19</option>
                        <option value="15">20</option>
                        <option value="15">21</option>
                        <option value="15">22</option>
                    </select>
                </div>
                <br/>
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </form>
        </div>


    </body>
</html>
