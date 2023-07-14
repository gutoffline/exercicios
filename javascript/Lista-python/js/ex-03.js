// Faça um Programa que peça dois números e imprima a soma.
function Somar(){
    let numero1 = document.getElementById("numero1").value;
    let numero2 = document.getElementById("numero2").value;
    let total = parseFloat(numero1) + parseFloat(numero2);
    document.getElementById("resultado").innerText = total;
}
