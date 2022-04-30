<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores passados foram $n1 e $n2";

        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
        echo "<br>O resultado será $r";

        $a = 3;
        $b = "3";
        $r = ($a === $b)? "SIM":"NAO";
        echo"<br> As variáveis A e B são iguais? $r";

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "<br>A média entre $nota1 e $nota2 é $m";
        echo "<br>A situação é ".(($m < 6)?"REPROVADO":"APROVADO");
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "<br>Quem nasceu em $ano tem idade de $idade anos";
        $tipo = (($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NAO OBRIGATORIO");
        echo "<br>E dessa forma seu voto é $tipo"


        ?>
    </div>
    
</body>
</html>