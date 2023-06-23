# Cartão Virtual
> Projeto para trabalhar com HTML e CSS de forma incial. O objetivo é criar um cartão virtual com informações de contato. Referência: https://linktr.ee/

## Criando HTML
Todo arquivo html deve ter o nome com .html, exemplo:
index.html

HTML - Hyper Text Markup Language

### HTML --> CONTEÚDO
```
<destacado>TEXTO</destacado>
<comando></comando>
<comando> --> <tag>
<p></p> --> parágrafo
<br> --> quebrar linha
<h1></h1> .... <h6></h6> --> Títulos
<img src="foto.jpg"> --> imagem
<a href="https://sp.senac.br">Senac</a> --> Link
```
**ALT + SHIFT + F** --> organiza o código automaticamente

## Criando o CSS
> CSS -> Cascading Style Sheet (Folha de estilo em cascata). O CSS é modo pelo qual iremos formatar(estilizar) o nosso conteúdo(HTML).

Existem 3 formas de estilizar o conteúdo:

1. inline - formatação é feita diretamente no elemento HTML
2. na página - formatação é feita dentro de uma seção `<style>`
3. **arquivo externo** - criamos um arquivo exclusivo para a formatação (.css)

A escolha do elemento html que será formatado, se dá através de seletores. Seletores são criados à partir de 3 possibilidade: tag, classe(.) e identificação (ID) (#).

Por exemplo: imagine que queremos modificar o funda do site para a cor laranja e a cor da letra para amarelo, podemos montar um seletor da seguinte forma:
```css
body{
    background-color: orange;
    color: yellow;
}
```
Explicação:
- body --> seletor (onde será formatado)
- background-color --> propriedade (o que será formatado)
- orange --> valor (como será formatado)


Design:
- tipografia
- cores
- grid
- espaçamento
- gestalt
- constraste