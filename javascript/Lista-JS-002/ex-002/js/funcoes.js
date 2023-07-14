function ConverterReaisEmDolar(){
    let reais = document.getElementById("reais").value;
    let cotacao = document.getElementById("cotacao").value;
    let dolar = reais / cotacao;
    document.getElementById("resultado").innerText = "$ " + dolar.toFixed(2);
}