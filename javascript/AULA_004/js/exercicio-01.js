function Exemplo(){
    // document.write("Escrevendo na tela");
    // document.getElementById("mensagem").innerText = "<em>Escrevendo na tela</em>";
    document.getElementById("mensagem").innerHTML = "<b>Escrevendo na tela</b>";

    document.getElementById("numero").value = "teste";

    console.log(document.getElementById("mensagem").innerHTML);

    let numero = document.getElementById("numero").value;
    console.log(numero);
}


// 1)ESCREVA UM ALGORITMO QUE PERGUNTA, LÊ E TESTA SE UM NÚMERO (NÚMERO) É MENOR QUE 20. DEPOIS ESCREVE <"MENOR QUE 20"> OU <"MAIOR QUE 20"> CONFORME O RESULTADO DO TESTE.
function Trocar(){
    let numero = document.getElementById("numero").value;

    if(numero<20)//teste
    {   
        //resposta verdadeira
        document.getElementById("mensagem").innerText = "Menor que 20";
    }
    else if(numero == 20)
    {
        document.getElementById("mensagem").innerText = "Igual a 20";
    }
    else
    {
        //resposta falsa
        document.getElementById("mensagem").innerText = "Maior que 20";
    }
}
