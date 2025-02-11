function verificarr () {
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado"); 

    if (numero % 2 === 0) {
        resultado.innerHTML = "O número " + numero + " é par.";
    } else {
        resultado.innerHTML = "O número " + numero + " é ímpar.";
    }
}