for(let i = 1 ; i <= 10; i++){
    document.querySelector("#contagem").innerHTML += i + "<br>";
}

/*
laço de repetições são blocos dentro de nosso código que será executados até que a condição seja falsa, no caso do FOR ele possui 3 partes:
for (inicialização da variável  ;  condição ; incremento)
for (let i = 0                  ;  i <= 10  ; i++)
inicialiação da variável --> aqui colocamos um valor inicial para a variável que servirá para controle de nosso laço. Normalmente o nome dessa variável é i(increment) porém não há problemas em usar outro nome
condição --> teste que será realizado em cada nova passagem do laço, o conteúdo dentro do laço será executado enquanto a condição estiver retornando verdadeiro.
incremento --> aumento no número da variável. i++ é a mais coisa que i = i + 1
*/