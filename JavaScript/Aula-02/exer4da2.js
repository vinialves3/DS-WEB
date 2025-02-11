function calcular() {
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    var operacao = document.getElementById("operacao").value;
    var resultado = document.getElementById("resultado3");

    if (operacao === "+") {
        resultado.innerHTML = "Resultado: " + (num1 + num2);
    } else if (operacao === "-") {
        resultado.innerHTML = "Resultado: " + (num1 - num2);
    } else if (operacao === "*") {
        resultado.innerHTML = "Resultado: " + (num1 * num2);
    } else if (operacao === "/") {
        resultado.innerHTML = "Resultado: " + (num1 / num2);
    }
}
