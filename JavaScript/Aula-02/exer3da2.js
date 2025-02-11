function verificarLogin() {
    var usuario = document.getElementById("usuario").value;
    var senha = document.getElementById("senha").value;
    var resultado = document.getElementById("resultado2");

    if (usuario === "admin" && senha === "12345") {
        resultado.innerHTML = "Bem-vindo, admin!";
    } else {
        resultado.innerHTML = "Usuário ou senha incorretos.";
    }
}