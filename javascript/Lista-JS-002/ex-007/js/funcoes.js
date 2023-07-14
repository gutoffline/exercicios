function VerificarHorasExtras(){
    let horasTrabalhadas = document.getElementById("horas-trabalhadas").value;
    let horasExtras = horasTrabalhadas - 44;

    if(horasExtras > 0){
        document.getElementById("resultado").innerHTML = "Você trabalhou <b>" + horasExtras + "</b> horas extras essa semana";
    }else{
        document.getElementById("resultado").innerText = "Você não trabalhou horas extras.";
    }
}