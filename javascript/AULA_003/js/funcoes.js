console.log("Guto Xavier");

/* Boas práticas para nome de variáveis
 - não utilizar caracteres especiais
 - não começar com números
 - não utilizar espaços
 - ter nome significativo
 - manter nome em minúsculo
 - quando for palavra composta, colocar as inciais a partir da segunda palavra em maiúsculo
 - o js diferencia minúsculas e MAIÚSCULAS (case sensitive) 
 - o js é fracamente tipado

 texto "Jake"
 numérico 10
    inteiro 10
    decimal 10.5
 lógico/booleano --> true / false --> 1 / 0
    10 > 7 -> true

    tipos de dados básicos do javascript são:
    - string --> "texto"
    - number --> 10 ou 10.5
    - boolean --> true / false

    = --> atribuição

    + --> concatenação quando é com texto
    + --> adição quando é só com números
 */

let nome = prompt("Informe seu nome");
alert("Olá " + nome + " seja bem vindo!");

let numero1 = prompt("Digite um número");
let numero2 = prompt("Digite outro número");

//se(numero > 20)
if(numero1>20){
    //escreva "número é maior que 20"
    alert("Número é maior que 20");
}
//senão
else
{
    //escreva "número é menor do que 20"
    alert("Número é menor que 20");
}
//fim se

alert(numero1 * numero2);
