<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link real="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Madeira & CIA</title>
</head>
<body>
    <div id="principal">
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
    </div>
    <footer>
        <p> Agenda 03 - Desenvolvimento de Sistemas II - Arwin Tuco</p>
    </footer>
    <!-- COMENTÁRIO
        Ao analisar o código original, percebi que os cálculos de desconto estavam invertidos: 
        o boleto estava com 10% e o depósito com 8%. Corrigi os percentuais e utilizei a função 
        number_format, para que os valores fossem exibidos com duas casas decimais.

        Na criação do formulário, organizei os campos de forma intuitiva (nome, valor da compra e forma de pagamento), 
        pensando na experiência do usuário. Como a empresa fictícia tinha o nome "Madeira & CIA", escolhi tons de marrom 
        para a paleta de cores, buscando uma identidade visual coerente com o tema.

        Por fim, estilizei com meu próprio CSS para deixar a interface mais clara e agradável.
    -->
</body>
</html>
