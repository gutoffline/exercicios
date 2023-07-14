function Inserir(elemento){
    document.getElementById("visor").value += elemento;
}

function LimparVisor(){
    document.getElementById("visor").value = "";
}

function RaizQuadrada(){
    let numero = document.getElementById("visor").value;
    document.getElementById("visor").value = Math.sqrt(numero);
}

function Calcular(){
    //pegar o texto do visor
    let expressao = document.getElementById("visor").value;

    //converter em expressão numérica e calcular
    let resultado = eval(expressao);

    //mostrar o resultado do cálculo no visor no visor
    document.getElementById("visor").value = resultado;
}

function Apagar(){
    let conteudo = document.getElementById("visor").value;
    document.getElementById("visor").value = conteudo.substring(0, conteudo.length - 1);
}