function ConversorMetrosCentimetros(){
    let metros = document.querySelector("#metros").value
    let centimetros = metros * 100
    document.querySelector("#centimetros").innerHTML = `${centimetros} cm`
}
