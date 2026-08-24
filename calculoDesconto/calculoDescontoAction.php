<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
     <header>
        <h1>Madeira & CIA</h1>
    </header>
    <div id="action">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["txtNome"];
            $valorCompra = $_POST["txtValorCompra"];
            $formaPagamento = $_POST["cmbPag"];
            $desconto = 0;

            if ($formaPagamento == "cartaoCredito") {
                $desconto = 0;
                $mensagem = "Olá $nome! <br> Sua compra de R$ ". number_format($valorCompra, 2, ',', '.') ." foi realizada com cartão de crédito. Não há desconto.";
            } elseif ($formaPagamento == "boleto") {
                $desconto = $valorCompra * 0.08;
                $mensagem = "Olá $nome! <br> Sua compra de R$ ". number_format($valorCompra, 2, ',', '.') ." foi realizada com boleto. Seu desconto é de R$ ". number_format($desconto, 2, ',', '.') .".";
            } elseif ($formaPagamento == "deposito") {
                $desconto = $valorCompra * 0.10;
                $mensagem = "Olá $nome! <br> Sua compra de R$ ". number_format($valorCompra, 2, ',', '.') ." foi realizada com depósito. Seu desconto é de R$ ". number_format($desconto, 2, ',', '.') .".";
            } else {
                $mensagem = "Forma de pagamento inválida.";
            }

            
            echo $mensagem;
            echo "<br><br> Valor final: R$ " . number_format($valorCompra - $desconto, 2, ',', '.');
        }
        ?>
    </div>
</body>
</html>