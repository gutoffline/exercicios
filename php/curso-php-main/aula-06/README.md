# Aula 06
- Arquivo texto
    - Criar
    - Ler

## Arquivo texto
### Criando um arquivo
- `fopen` : indicar o nome do arquivo e a maneira como esse arquivo será aberto. Exemplo: `fopen("clientes.txt","w");` o nome do arquivo é "clientes.txt" e a maneira como arquivo será aberto é "w", que significa escrita.
- `fwrite` : indicar o nome do arquivo e o conteúdo que será inserido nesse arquivo. Exemplo: `fwrite($arquivo,"Renata");` o nome do arquivo é "clientes.txt" e o conteúdo que será inserido no arquivo é "Renata"
- `fclose` : indicar qual arquivo será fechado. Exemplo: `fclose($arquivo);`.

```php
$arquivo = fopen("clientes.txt","w");
fwrite($arquivo, "Renata");
fclose($arquivo);
```

> Tabela com os modos de abertura de arquivos: https://eufacoprogramas.com/como-manipular-arquivos-em-php/

### Lendo um arquivo
- `fopen`: o modo de abertura é o "r" que indica leitura do arquivo. Exemplo: `fopen("clientes.txt", "r");`
- `fread` : indicar o arquivo que será lido e o tamanho das informações que seram lidas, nesse caso, como normalmente queremos o arquivo inteiro utilizamos o comando `filesize` que retorna o tamanho de um arquivo. Exemplo: `fread($arquivo, filesize("clientes.txt"));`

```php
$arquivo = fopen(clientes.txt,"r");
echo fread($arquivo,filesize(clientes.txt));
fclose($arquivo);
```