// Faça um Programa que peça um número e então mostre a mensagem O número informado foi [número].

function Mostrar(){
    let numero = document.getElementById("numero").value;
    document.getElementById("mensagem").innerHTML = "O número informado foi " + numero;
}
