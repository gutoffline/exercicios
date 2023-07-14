function CriarTurmas(){
    let quantidadeTurmas = document.querySelector("#quantidadeTurmas").value;
    let campos = document.querySelector("#campos");
    campos.innerHTML = "";

    for(let i = 1; i <= quantidadeTurmas; i++){
        campos.innerHTML += "Turma " + i + "<input type='number' id='turma" + i + "' max='40'><br>";
    }
}

function MediaDeAlunos(){
    let quantidadeTurmas = document.querySelector("#quantidadeTurmas").value;
    let totalAlunos = 0;
    for(let i = 1; i <= quantidadeTurmas; i++){
        totalAlunos += parseFloat(document.querySelector("#turma"+i).value);
    }
    let media = totalAlunos / quantidadeTurmas;
    document.querySelector("#resultado").innerHTML = "A média de alunos por turma é: " + media;
}
