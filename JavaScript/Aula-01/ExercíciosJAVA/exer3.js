var numero1 = Number.parseInt(prompt("Digite o primeiro número"));
var numero2 = Number.parseInt(prompt("Digite o segundo número"));
var operacaocodigo = Number.parseInt(prompt("Digite o código da operação (1 = SOMA, 2 = SUBTRAÇÃO, 3 = MULTIPLICAÇÃO, 4 = DIVISÃO)"));

if (operacaocodigo == 1)
    alert(numero1 + numero2);
if (operacaocodigo == 2)
    alert(numero1 - numero2);
if (operacaocodigo == 3)
    alert(numero1 * numero2);
if (operacaocodigo == 4)
    alert(numero1 / numero2);
