# Aula 04
- Operadores lógicos
- Estrutura de decisão
    - if
    - switch
    - ternário
- Estrutura de repetição
    - while

## Operadores lógicos
- Os operadores lógicos são:
    - && (AND ou E): se apenas uma expressão for falsa o resultado será falso. Para ser verdadeiro, todas as expressões precisam ser verdadeiras.
    - || (OR ou OU): uma expressão precisa ser verdadeira para o resultado ser verdadeiro. O resultado só sera falso se todas as expressões forem falso.
    - ! (NOT ou NÃO): inverte o resultado, se for verdadeiro e você usar o NOT o resultado mudará para falso, se for falso mudará para verdadeiro.

## Estrutura de decisão
### IF
- Quando você precisa que seu código tome alguma decisão baseado em uma ou mais condições.
#### Sintaxe
```php
if(condição){
    resposta verdadeira
}else{
    resposta falsa
}
```

#### IF Simples
```php
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}
```

#### IF com ELSE
```php
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}else{
    echo "Você não pode entrar";
}
```

#### IF com ELSE IF
```php
if($nota >= 8){
    echo "<p>Aprovado</p>";
}else if($nota >= 5){
    echo "<p>Recuperação</p>";
}else{
    echo "<p>Reprovado</p>";
}
```

### Ternário
#### Sintaxe
```php
condição ? resposta verdadeira : resposta falsa
```

#### Exemplo
```php
echo ($idade>=18) ? "pode entrar" : "rejeitado";
```

### switch
#### Sintaxe
```php
switch(variável){
    case valor:
        código
        break;
    case valor:
        código
        break;
    default: 
        código
        break;
}
```

#### Exemplo
```php
switch ($cor) {
    case 'azul':
        echo "<p>Sua cor favorita é <b>AZUL</b></p>";
        break;
    
    case 'verde':
        echo "<p>Sua cor favorita é <b>VERDE</b></p>";
        break;
    
    case 'vermelho':
        echo "<p>Sua cor favorita é <b>VERMELHO</b></p>";
        break;
        
    default:
        echo "<p>Sua cor favorita não é verde, nem azul e nem vermelho</p>";
        break;
}
```

## Estrutura de repetição
### while - enquanto
- Será executado o laço enquanto a condição for verdaadeira
#### Sintaxe
```php
while(condição){
    código
}
```

#### Exemplo
```php
while($contador <= 10){
    echo "contador while, loop número $contador <br>";
    $contador++; // $contador = $contador + 1;
}
```