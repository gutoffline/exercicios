function Soma(){
    let numero1 = document.getElementById("numero1").value;
    let numero2 = document.getElementById("numero2").value;
    
    //float é tipo de dado decimal --> 10.5
    //int é o tipo de dado inteiro --> 10
    let conta = parseFloat(numero1) + parseFloat(numero2);

    // document.getElementById("resultado").innerText = conta;

    if(conta == 0)
    {
        document.getElementById("resultado").innerText = "Neutro";
    }
    else if(conta > 0)
    {
        document.getElementById("resultado").innerText = "Positivo";
    }
    else
    {
        document.getElementById("resultado").innerText = "Negativo";
    }

}