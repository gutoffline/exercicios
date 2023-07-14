function CalcularSalario(){
    let horasTrabalhadas = document.getElementById("horas-trabalhadas").value;
    let valorHora = document.getElementById("valor-hora").value;
    let salarioMes = horasTrabalhadas * valorHora;
    document.getElementById("resultado").innerText = "Salário Mensal: " + salarioMes;
}