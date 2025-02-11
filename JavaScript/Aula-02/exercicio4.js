function calcularAcrescimo() {
    var valor = document.getElementById("valor").value;
    var porcentagem = document.getElementById("porcentagem").value;
    var resultado = document.getElementById("resultado");

    var acrescido = Number(valor) + (Number(valor) * (Number( porcentagem) / 100));

    resultado.innerHTML = "O novo valor é: " + acrescido.toFixed(2);
}