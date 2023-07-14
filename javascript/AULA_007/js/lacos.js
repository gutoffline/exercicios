
let idade = 120;
// && --> operador lógico E 
// condição1 E condição2 tem que ser verdadeiras para entrar no if
if (idade >= 18 && idade <= 98) {
    document.querySelector("#resposta").innerHTML = "Pode dirigir";
}else if(idade > 99){
    document.querySelector("#resposta").innerHTML = "Acho melhor não";
}else{
    document.querySelector("#resposta").innerHTML = "Não Pode dirigir";
}

// || --> operador lógico OU
// condição1 OU condição2 tem que ser verdadeiras para entrar no if
let peso = 30;
if( peso < 40 || peso > 120){
    document.querySelector("#resposta").innerHTML = "atenção";
}

// ! --> operador lógico NÃO
// nega o resultado de uma expressão
idade = 20;
if(!idade >= 18){
    document.querySelector("#resposta").innerHTML = "PODE DIRIGIR";
}else{
    document.querySelector("#resposta").innerHTML = "NÃO PODE DIRIGIR";
}


// && --> E
// || --> OU
// ! --> NÃO

