// apagar o último dígito da direita
// descobrir quantos digitos existem para poder saber qual a posição do último digito


// para declarar uma variável utilizamos "let"
// é possível encontrar na internet declarações de variáveis utilizando "var" , essa é uma forma mais antiga de declarar variáveis
// temos também o "const" para declarar uma constante, constante é um elemento que não permite que seu conteúdo seja alterado após um valor inicial

let nome = "Guto Xavier";
console.log(nome);

//a propriedade length armazena a quantidade de caracteres que uma variável ou constante possui
console.log(nome.length);

// objetos possuem propriedades e métodos(função). Propriedades são basicamente características, métodos são ações.
// Um cachorro possui as propriedades cor do pelo, peso, idade,... etc, e os métodos latir, morder, correr, ... etc

//o método substring corta o conteúdo da variável de acordo com as posições inicial e final passadas
console.log(nome.substring(1,3));