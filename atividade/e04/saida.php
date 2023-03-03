<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Saida</title>
</head>

<body>
    <section>

        <?php
        $titulo = $_GET["titulo"];
        $espacoOcupadoPelaTabelaEmPorcentagem = $_GET["esp"];
        $qtdLinha = $_GET["linhas"];
        $qtdCol = $_GET["col"];
        $tamanhoBorda = $_GET["borda"];
        $corFundoTabela = $_GET["corFundo"];
        $corTextoTabela = $_GET["corTexto"];
        $tamanhoBordaEmPixels = $tamanhoBorda . 'px';

        echo "<h1> Tabela Gerada com Sucesso! </h1>";
        echo "<table style='width: $espacoOcupadoPelaTabelaEmPorcentagem%; border: $tamanhoBordaEmPixels solid black; background-color: $corFundoTabela; color: $corTextoTabela;'>";
        echo "<caption><h4>". $titulo ."</h4></caption>";
        for ($i = 1; $i <= $qtdLinha; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $qtdCol; $j++) {
                echo "<td style='border: $tamanhoBordaEmPixels solid black;'> Texto</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>



    </section>
</body>

</html>