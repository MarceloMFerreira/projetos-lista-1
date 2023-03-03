<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Gerador de Retângulos</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Preencha os Campos Corretamente</h1>
                <form action="saida.php" method="get">
                    <div class="form-group">
                        <label for="largura">Largura:</label>
                        <input type="number" required="required" class="form-control" id="largura" name="largura" />
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura:</label>
                        <input type="number" required="required" class="form-control" id="altura" name="altura" />
                    </div>
                    <div class="form-group">
                        <label for="caractere">Caractere de borda:</label>
                        <input type="text" required="required" class="form-control" id="caractere" name="caractere" />
                    </div>
                    <div class="form-group">
                        <label for="coresBorda">Cor da borda:</label>
                        <select class="form-control" id="coresBorda" name="coresBorda">
                            <option value="">Escolha uma cor</option>
                            <option value="#000000" style="color:#000000">Preto</option>
                            <option value="#FF0000" style="color:#FF0000">Vermelho</option>
                            <option value="#00FF00" style="color:#00FF00">Verde</option>
                            <option value="#0000FF" style="color:#0000FF">Azul</option>
                            <option value="#FFFF00" style="color:#FFFF00">Amarelo</option>
                            <option value="#FF00FF" style="color:#FF00FF">Roxo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="caracterePreenchimento">Caractere de preenchimento:</label>
                        <input type="text" required="required" class="form-control" id="caracterePreenchimento" name="caracterePreenchimento" />
                    </div>
                    <div class="form-group">
                        <label for="coresPreenchimento">Cor do Preenchimento:</label>
                        <select class="form-control" id="coresPreenchimento" name="coresPreenchimento">
                            <option value="">Escolha uma cor</option>
                            <option value="#000000" style="color:#000000">Preto</option>
                            <option value="#FF0000" style="color:#FF0000">Vermelho</option>
                            <option value="#00FF00" style="color:#00FF00">Verde</option>
                            <option value="#0000FF" style="color:#0000FF">Azul</option>
                            <option value="#FFFF00" style="color:#FFFF00">Amarelo</option>
                            <option value="#FF00FF" style="color:#FF00FF">Roxo</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Gerar Retângulo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-U9X4J4Aq0WdKbL0DyWAfaEJvjN+jQ/wzO9YX/+KsTgFp27a7El/qlIcMw/QKjldU" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>