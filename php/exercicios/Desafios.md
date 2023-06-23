## Perguntas

1. Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".


2. Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.

3. Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. 

4. Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 

5. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".

6. Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.

7. Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]

8. Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.

9. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.

 ## Respostas 
 1. 
```php
$val = $_POST['valor']; //Valor de entrada
$resultado = "";

if($val > 0){
  $resultado = "Valor Positivo";
}elseif($val < 0){
  $resultado = "Valor Negativo";
}else{
  $resultado = "Igual a Zero";
}

echo $resultado;
```

2. 
```php
$num = $_POST['numero'];

for($i = 0; $i <= 10; $i++){
    echo "{$num} * {$i} = " . ($num * $i) . "<br>";
}
```

3.
```php

$num01 = $_POST['numero1'];
$num02 = $_POST['numero2'];
$opera = $_POST['operacao'];
$resul = "";

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
}
```

4. 
```php
$num = $_POST['numero'];

if($num % 2 == 0){
    echo "Par";
}else{
    echo "Impar";
}
```

5. 
```php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

if($num1 > $num2){
    echo $num1 . " " . $num2;
}else{
    echo $num2 . " " . $num1;
}
```

6.
```php
$numA = $_POST['numeroA'];
$numB = $_POST['numeroB'];

if($numA > $numB){
    echo "A maior que B";
}else{
    echo "A menor que B";
}
```

7.
```php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$n3 = $_POST['nota3'];
$notas = [$n1, $n2, $n3];
$smTotal = 0;

for($i = 0; $i < count($notas); $i++){
    $smTotal += $notas[$i];
}

$resultado = $smTotal / count($notas);

if($resultado >= 6){
    echo "Aprovado, média final {$resultado}";
}else{
    echo "Reprovado, média final {$resultado}";
}
```

8.
```php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 18){
    echo "{$nome} é maior de 18 e tem {$idade} Anos";
}else{
    echo "{$nome} não é maior de 18 e tem {$idade} Anos";
}
```

9.
```php
  $mes = [
  "Janeiro", "Fevereiro",
  "Março", "Abril",
  "Maio", "Junho",
  "Julho", "Agosto",
  "Setembro", "Outubro",
  "Novembro", "Dezembro"];

  $numMes = $_POST['numero'];

  if($numMes >=1 && $numMes <=12){
    echo $mes[$numMes - 1];
  }else{
    echo "Mês inválido";
  }
```