function verificarTriangulo() {
    var l1 = Number(document.getElementById("lado1").value);
    var l2 = Number(document.getElementById("lado2").value);
    var l3 = Number(document.getElementById("lado3").value);
    var resultado = document.getElementById("resultado6");

    if (l1 + l2 > l3 && l1 + l3 > l2 && l2 + l3 > l1) {
        if (l1 === l2 && l2 === l3) {
            resultado.innerHTML = "Triângulo Equilátero (todos os lados iguais).";
        } else if (l1 === l2 || l1 === l3 || l2 === l3) {
            resultado.innerHTML = "Triângulo Isósceles (dois lados iguais).";
        } else {
            resultado.innerHTML = "Triângulo Escaleno (todos os lados diferentes).";
        }
    } else {
        resultado.innerHTML = "Os valores não formam um triângulo.";
    }
}
