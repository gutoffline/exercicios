function CalculoIMC(){
    //pegar os valores de peso e altura
    let peso = document.getElementById("peso").value;
    let altura = document.getElementById("altura").value;

    //calcular o IMC --> PESO / (ALTURA * ALTURA)
    let imc = peso / (altura*altura);
    console.log(imc);

    //VERIFICAR SE O IMC < 20
    if(imc<20)
    {
        //SE FOR, MOSTRAR "MAGRO"
        document.getElementById("mensagem").innerText = "Sou pobre, porém honrado!";
        document.getElementById("imagem").src="images/magro_mais.gif";
    }
    //VERIFICAR SE O IMC >= 25
    else if(imc >=25)
    {
        //SE FOR MOSTRAR "SOBREPESO"
        document.getElementById("mensagem").innerText = "Só não te dou outra porque...minha vózinha era bodybuilder.";
        document.getElementById("imagem").src="images/seu_barriga.gif";
    }
    //SE NÃO, MOSTRAR "OK"
    else
    {
        document.getElementById("mensagem").innerText = "Só não te dou outra porque...minha vózinha era bodybuilder.";
        document.getElementById("imagem").src="images/normal.gif";
    }

}