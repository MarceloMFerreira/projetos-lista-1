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
                        <label for="largura">Valor total da Prova 1:</label>
                        <input type="number" required="required" class="form-control" id="prova1" name="prova1" />
                    </div>
                    <div class="form-group">
                        <label for="largura">Valor total da Prova 2:</label>
                        <input type="number" required="required" class="form-control" id="prova2" name="prova2" />
                    </div>
                    <div class="form-group">
                        <label for="largura">Nota da Prova 1:</label>
                        <input type="number" required="required" class="form-control" id="nota1" name="nota1" />
                    </div>
                    <div class="form-group">
                        <label for="largura">Nota da Prova 2:</label>
                        <input type="number" required="required" class="form-control" id="nota2" name="nota2" />
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