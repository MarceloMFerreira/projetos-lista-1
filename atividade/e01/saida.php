<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Saida</title>
</head>
<body>
    <section id="conteudo">
        <table cellspacing="5">
            <tr>
                <td style="border: none; font-family: Courier New;">
                    <?php
                        $largura = $_GET["largura"];
                        $altura = $_GET["altura"];
                        $bordaCaractere = $_GET["caractere"];
                        $corBorda = $_GET["coresBorda"];
                        $preenchimentoCaractere = $_GET["caracterePreenchimento"];
                        $corPreenchimento = $_GET["coresPreenchimento"];

                        echo "<h1> Resultado: </h1>";
                        for ($i=0; $i < $altura ; $i++) { 
                            for ($j=0; $j < $largura; $j++) { 
                                if($i == 0 || $i == $altura -1)
                                    echo '<font color="'.$corBorda.'">'.$bordaCaractere.'</font>';
                                else if($j == 0 || $j == $largura-1
                                )
                                    echo '<font color="'.$corBorda.'">'.$bordaCaractere.'</font>';
                                else
                                    echo '<font color="'.$corPreenchimento.'">'.$preenchimentoCaractere.'</font>';
                                
                            }
                            echo "<br/>";
                        }


                    ?>
                </td>
            </tr>
        </table>
    </section>
</body>
</html>