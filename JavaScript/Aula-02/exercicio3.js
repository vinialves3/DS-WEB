function converterMaiusculas() {
    var texto = document.getElementById("texto").value;
    var resultado = document.getElementById("resultado");

    resultado.innerHTML = texto.toUpperCase();
}