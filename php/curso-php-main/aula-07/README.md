# Aula 07
- Arquivo CSV - comma-separated-values (valores separados por vírgulas)
    - Criar
    - Ler

## Criar CSV
- fputcsv(arquivo, dados, separador) : dados devem ser um array. Exemplo:
```php
foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");    
}
```

## Ler CSV
