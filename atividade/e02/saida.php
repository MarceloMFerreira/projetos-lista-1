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
    <section id="conteudo">
        <table>
            <tr>
                <td>
                    <?php
                    $resp = 1;
                    $valor = $_GET["num"];
                    $aux = "";
                    echo "<h1> Resultado: </h1>";
                    echo "O fatorial de ". $valor ." é => ";
                    for ($i = $valor; $i >= 1; $i--) {
                        $resp = $resp * $i;
                        echo $aux.$i;
                        $aux = " * ";
                    }
                    
                    echo " = " . ($resp);

                    ?>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>