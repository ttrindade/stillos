<html>

    <head>
        <title>Cadastro de eventos</title>
        <?php echo $componentes->metas(); ?>
    </head>

    <body>
        <div class="conteudo">
            <?php
            //Retorna o nome da imagem caso o cadastro seja bem sucedido
            $nomeImagem = $controller->requestCadastro($_SESSION['UsuarioID'], $_POST['titulo'], $_POST['status'], $_POST['descricao'], $_POST['data'], $_FILES['arquivo']);

            if ($nomeImagem) {
                echo "<h1>Evento cadastrado com sucesso!</h1>";
                echo "<h3>" . $_POST['titulo'] . "</h3>";
                echo "<img src='../../../../../static/imagesUpload/$nomeImagem' class='thumbnail'\">";
            } else {
                echo "Arquivo inválido.";
            }
            ?>
            <br><br>
            <a href="../../painel.php"><button>Voltar para o painel.</button></a>
        </div>
    </body>
</html>
