# 💰🧾 Cálculo de Desconto - Madeira & CIA 🧾💰

## 📖 Sobre o projeto
Este projeto apresenta um sistema simples para calcular descontos em compras, de acordo com a forma de pagamento escolhida pelo usuário.  
O site simula uma loja fictícia chamada **Madeira & CIA** e possui um formulário que coleta os seguintes dados:
- **Nome do Usuário**
- **Valor da Compra**
- **Forma de Pagamento** (Boleto, Cartão de Crédito ou Depósito)

Após o envio, o PHP processa os dados e retorna:
- Mensagem personalizada com o nome do usuário
- Valor da compra formatado
- Percentual de desconto aplicado
- Valor final com desconto

## 💻 Linguagens utilizadas
- HTML5
- CSS externo
- PHP

## ⚙️ Estruturas utilizadas
- **form, input, select, button:** para criar o formulário de entrada.
- **method="POST":** para enviar os dados do formulário de forma segura ao arquivo PHP de processamento.
- **if / elseif / else:** para aplicar a lógica de cálculo dos descontos.
- **number_format():** para formatar os valores monetários com duas casas decimais.
- **echo:** para exibir mensagens e resultados.

## ▶️ Como executar este projeto
- Clone este repositório:
    ```bash
    git clone https://github.com/arwintuco/ETEC-DS-Modulo2.git
    ```

- Acesse a pasta do projeto:
    ```bash
    cd calculoDesconto
    ```

- Execute os arquivos em um servidor local.