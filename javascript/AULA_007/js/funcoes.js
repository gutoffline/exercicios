
// parâmetro --> valor que a função recebe, e esse valor pode ser diferente de acordo com quem está chamando a função
function Mensagem(texto){

    // Manipulação do DOM
    // Document Object Model

    // document.getElementById("titulo").innerHTML="<em>Olá</em>";
    document.querySelector("#titulo").innerHTML="<em>" + texto + "</em>";
    // document.querySelector(".principal").innerHTML="<em>Olá</em>";
    // document.querySelector("strong").innerHTML="<em>Olá</em>";
}

