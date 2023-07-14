function Tabuada(){
    let inicial = document.querySelector("#inicial").value;
    document.querySelector("#resultado").innerHTML = "Tabuada do " + inicial + "<br><br>";
    for(let i = 1 ; i <= 10; i++){
        document.querySelector("#resultado").innerHTML += inicial + "x" + i + " = " + (inicial*i) + "<br>";
    }
}