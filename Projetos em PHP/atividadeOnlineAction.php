<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Resultado</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>
            <?php
            $nome = $_POST['txtNome'];
            $vcompra = $_POST['txtValorCompra'];
            $pag = $_POST['cmbPag'];
            $por;
            if($pag == "Depósito")
            {
                $por = 10;
            }
            elseif($pag == "Boleto")
            {
                $por = 8;
            }
            elseif($pag == "Cartão de Crédito")
            {
                $por = 0;
            }
            echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO!<br>";
            echo "".$nome."!<br>";
            echo "Valor da Compra Sem Desconto: R$ ".$vcompra."<br>";
            echo "Forma de Pagamento escolhida: ".$pag."<br>";
            echo "Desconto de: ".$por."%<br>";
            echo "Você economizou: R$ ".($por * $vcompra / 100)."<br>";
            echo "Valor à pagar: R$ ".($vcompra - $por * $vcompra / 100)."<br>";
            ?>
            </h1>
</div>
      
</body>
</html>