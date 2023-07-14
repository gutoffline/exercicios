function Calcular(){
    let numero1 = document.getElementById("numero1").value;
    let numero2 = document.getElementById("numero2").value;
    let resultado = parseFloat(numero1) + parseFloat(numero2);
    document.getElementById("resultado").innerHTML = "Resultado: " + resultado;

    document.getElementById("numero1").value = "";
    document.getElementById("numero2").value = "";
}