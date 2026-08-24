<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Madeira & CIA</title>
</head>
<body>
    <header>
        <h1>Madeira & CIA</h1>
    </header>
    <form method="POST" action="calculoDescontoAction.php">
        <div id="form">
            <label><b>Nome do Usuário</b></label>
            <input name="txtNome" type="text">

            <label><b>Valor da Compra</b></label>
            <input name="txtValorCompra" type="number" step="0.01">

            <label><b>Forma de Pagamento</b></label>
            <select name="cmbPag">
                <option value="" disabled selected></option>
                <option value="boleto">Boleto</option>
                <option value="cartaoCredito">Cartão de Crédito</option>
                <option value="deposito">Depósito</option>
            </select>
        </div>
        <button type="submit"><b>Calcular Desconto</b></button>
    </form>
    <!-- COMENTÁRIO
        Ao analisar o código original, percebi que os cálculos de desconto estavam invertidos: 
        o boleto estava com 10% e o depósito com 8%. Depois adicionei a saída com o cálculo do valor final usando number_format para manter duas casas decimais. 

        Na criação do formulário, pensei na organização dos campos: nome, valor da compra e forma de pagamento. Como a empresa tinha o nome de "madeira" resolvi
        colocar tons de marrom. Por fim, estilizei com meu próprio CSS para deixar a interface mais clara e agradável.
    -->

</body>
</html>
