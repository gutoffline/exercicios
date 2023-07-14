function CriarFicha(){
    let nome = document.querySelector("#nome").value;
    let raca = document.querySelector("#raca").value;
    let classe = document.querySelector("#classe").value;
    let historia = document.querySelector("#historia").value;
    let ficha = document.querySelector(".ficha");
    ficha.innerHTML = "<h1>" + nome + "</h1>";
    ficha.innerHTML += "<img src='images/" + raca + "'><br>";
    ficha.innerHTML += "<img src='images/" + classe + "'><br>";
    ficha.innerHTML += "<p>" + historia + "</p>";

    document.querySelector(".painel-2").style.display = "block";
    document.querySelector(".painel-1").style.display = "none";
}

function ExibirFicha(){

}
function Iniciar(){
    document.querySelector(".painel-2").style.display = "none";
    document.querySelector(".painel-3").style.display = "block";
}