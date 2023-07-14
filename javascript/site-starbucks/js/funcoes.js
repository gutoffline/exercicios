function TrocarImagem(imagemNova){
    // document.querySelector(".starbucks").src = imagemNova;
    let copo = document.querySelector(".starbucks");
    copo.src = imagemNova;
}

function MudarCirculo(corNova){
    let circulo = document.querySelector(".circulo");
    circulo.style.background = corNova;

    // mudar cor do texto
    let titulo = document.querySelector(".caixa-texto span");
    titulo.style.color = corNova;

    // mudar cor do botão
    let botao = document.querySelector(".caixa-texto a");
    botao.style.background = corNova;
}