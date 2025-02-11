function maiorNumero() {
    var n1 = Number(document.getElementById("n1").value);
    var n2 = Number(document.getElementById("n2").value);
    var n3 = Number(document.getElementById("n3").value);
    var resultado = document.getElementById("resultado5");

    var maior = Math.max(n1, n2, n3);
    resultado.innerHTML = "O maior número é: " + maior;
}
