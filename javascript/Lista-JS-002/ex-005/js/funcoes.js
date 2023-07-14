function MetrosParaPolegadas(){
    let metros = document.getElementById("metros").value;
    let polegadas = metros * 39.3701;
    document.getElementById("resultado").innerText = "Polegadas: " + polegadas.toFixed(0);
}