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
                <td style="border: none;">
                    <?php
                        $valor1 = $_GET["prova1"];
                        $valor2 = $_GET["prova2"];
                        $nota1 = $_GET["nota1"];
                        $nota2 = $_GET["nota2"];
                        
                        echo "<h1> Resultado: </h1>";
                        echo "O valor total das duas provas é ". ($valor1 + $valor2). " pontos.<br/>";
                        echo "Em relação à Prova 1, o aluno obteve ". round(100*$nota1/$valor1). "% do total.<br/>";
                        echo "Em relação à Prova 1, o aluno obteve ". round(100*$nota2/$valor2). "% do total.<br/>";
                        echo "O aluno totalizou com as duas provas, ". ($nota1 + $nota2). " pontos.<br/>";
                        echo "A porcentagem obtida pelo aluno em função do total foi de ". round(100*($nota1+$nota2)/($valor1 + $valor2))."<br/>";
                        echo "O conceito do aluno foi: ". desempenho(round(100*($nota1+$nota2)/($valor1 + $valor2)));
                        
                        function desempenho ($porc){
                            if($porc < 60)
                                return "Péssimo";
                            else if($porc >= 60 && $porc <= 69)
                                return "Ruim";
                            else if($porc >= 70 && $porc <= 79)
                                return "Bom";
                            else if($porc >= 80 && $porc <= 89)
                                return "Ótimo";
                            else if($porc >= 90 && $porc <= 100)
                                return "Excelente";
                        }


                    ?>
                </td>
            </tr>
        </table>
    </section>
</body>
</html>