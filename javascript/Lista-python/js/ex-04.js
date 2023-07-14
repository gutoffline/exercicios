//Faça um Programa que peça as 4 notas bimestrais e mostre a média.
function CalcularMedia(){
    //pegar as 4 notas
    let nota1 = document.getElementById("nota1").value;
    let nota2 = document.getElementById("nota2").value;
    let nota3 = document.getElementById("nota3").value;
    let nota4 = document.getElementById("nota4").value;

    //calcular a média --> (n1 + n2 + n3 + n4) / 4
    let media = (parseFloat(nota1) + parseFloat(nota2) + parseFloat(nota3) + parseFloat(nota4)) / 4;

    //mostrar a média na tela
    document.getElementById("media").innerText = media;

}