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
                        <label for="largura">Título da Tabela:</label>
                        <input type="text" required="required" class="form-control" id="titulo" name="titulo" />
                    </div>
                    <div class="form-group">
                        <label for="esp">Espaço ocupado pela tabela na página (%):</label>
                        <select class="form-control" id="esp" name="esp">
                            <option value="">Escolha uma opção</option>
                            <option value="20">20%</option>
                            <option value="40">40%</option>
                            <option value="60">60%</option>
                            <option value="80">80%</option>
                            <option value="100">100%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="linhas">Quantidade de linhas:</label>
                        <input type="number" required="required" class="form-control" id="linhas" name="linhas" />
                    </div>
                    <div class="form-group">
                        <label for="col">Quantidade de colunas:</label>
                        <input type="number" required="required" class="form-control" id="col" name="col" />
                    </div>
                    <div class="form-group">
                        <label for="borda">Tamanho da borda (0 a 9):</label>
                        <input type="number" required="required" class="form-control" id="borda" name="borda" />
                    </div>
                    <div class="form-group">
                        <label for="corFundo">Cor de fundo da tabela:</label>
                        <select class="form-control" id="corFundo" name="corFundo">
                            <option value="">Escolha uma cor</option>
                            <option value="#000000" style="color:#000000">Preto</option>
                            <option value="#FF0000" style="color:#FF0000">Vermelho</option>
                            <option value="#00FF00" style="color:#00FF00">Verde</option>
                            <option value="#0000FF" style="color:#0000FF">Azul</option>
                            <option value="#FFFF00" style="color:#FFFF00">Amarelo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="corTexto">Cor do texto da tabela:</label>
                        <select class="form-control" id="corTexto" name="corTexto">
                            <option value="">Escolha uma cor</option>
                            <option value="#000000" style="color:#000000">Preto</option>
                            <option value="#FF0000" style="color:#FF0000">Vermelho</option>
                            <option value="#00FF00" style="color:#00FF00">Verde</option>
                            <option value="#0000FF" style="color:#0000FF">Azul</option>
                            <option value="#FFFF00" style="color:#FFFF00">Amarelo</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calcular</button>
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