function verificarParImpar() {
    var num = document.getElementById("numParImpar").value;
    var resultado = document.getElementById("resultado4");

    if (num % 2 === 0) {
        resultado.innerHTML = "O número é par.";
    } else {
        resultado.innerHTML = "O número é ímpar.";
    }
}