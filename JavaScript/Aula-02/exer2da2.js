function verificarNumero() {
    var num = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado1");

    if (num > 0) {
        resultado.innerHTML = "O número é positivo.";
    } else if (num < 0) {
        resultado.innerHTML = "O número é negativo.";
    } else {
        resultado.innerHTML = "O número é zero.";
    }
}
