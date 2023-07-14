# Site de escolha de jogos

- [X] Alterar a cor do fundo (roxo)
- [X] Alterar a cor do título (verde)
- [X] Trocar a cor das duas linhas( vermelho e azul )
- [X] Aumentar o tamanho da letra/fonte dos links

---
<br><br>
## Cascading Style Sheet - CSS

- inline - `style="background:#b700ff"`
- interna - `<style>...</style>`
- **externa** - crio um arquivo css externo, e no meu html eu faço um link para esse arquivo

<br>

***propriedade:valor***
- *propriedade* o que estou modificando
- *valor* é como estou modificando
background:purple

<br><br>

***Cor***
- nome da cor em inglês. Ex: `red`
- código hexadecimal. Ex: `#FF0000`
- código rgb. Ex: `rgb(150,0,255)`

<br><br>
***Bases numéricas***
- Decimal - 0 1 2 3 4 5 6 7 8 9
- Binário - 0 1   
- Octal - 0 1 2 3 4 5 6 7 
- Hexadecimal - 0 1 2 3 4 5 6 7 8 9 A B C D E F

  
```EXISTEM 10 TIPOS PESSOAS NO MUNDO, AS QUE SABEM BINÁRIO E AS QUE NÃO SABEM```

```
#FF 00 00
 RR GG BB
```

 **RGB** --> CORES DIGITAIS

 **CMYK** --> IMPRESSÃO
 
<br><br>

## SELECTOR CSS 
seleção onde a regra css será aplicada

Seletor de Tag
```
tag{
    propriedade:valor
}
```
Exemplo:
```
body{
    background:purple
}
```
Seletor de classe, no css
```
.nomedaclasse{
    propriedade:valor;
}
```
Sua aplicação no html
```
<a class="nomedaclasse"> ... </a>
<strong class="nomedaclasse"> ... </strong>
```