# Aula 05
- Estrutura de repetição
    - while
        - operador de incremento
        - array
    - for
- Desafios
- Arquivo texto
    - Criar

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

### Operador de incremento
- `$i++` é igual à `$i = $i + 1`
- o operador `++` faz com que seja atribuído +1 à variável incrementada
- o operador `--` faz com que seja removido -1 da variável decrementada

### Array
- array é uma varável com multidimensões, isso significa que eu posso armazenar diversos valores(inclusive ) de tipos diferentes no array
- um array possui posições iguais à quantidade de elementos. Exemplo: `$clientes = ['Guto','Renato', 'João']`
-  o array clientes possui 3 posições sempre começando em 0. Para eu exibir o cliente Guto eu devo usar `$clientes[0]`, para exibir o cliente João devo usar `$clientes[2]`.
- o comando `count()` exibe a quantidade de posições de um array. Exmeplo: `count($clientes)`

### for - para
#### Sintaxe
```php
for(inicialização da variável ; condição ; incremento){
    bloco de código
}
```
#### Exemplo
```php
for($i=1 ; $i <= 10; $i++){
    echo $i;
}
```

#### Exemplo
```php
for ($i=0; $i < count($clientes); $i++) { 
    echo "$clientes[$i]<br>";
}
```


## Arquivo de texto
### Criando um arquivo
- no comando `fopen` você passa o nome do arquivo que será criado e o argumento para criar o arquivo, no caso `w`
```php
$arquivo = fopen("clientes.txt","w");
fwrite($arquivo, "Cliente 01");
fclose($arquivo);
```

