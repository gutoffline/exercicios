function Contar(){
    let inicial = document.querySelector("#inicial").value;
    let final = document.querySelector("#final").value;
    for(let i = inicial ; i <= final; i++){
        document.querySelector("#contagem").innerHTML += i + " ";
    }
}