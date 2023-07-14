function VerificarIdade(){
    let nome = document.getElementById("nome").value;
    let idade = document.getElementById("idade").value;

    if(idade >= 18){
        document.getElementById("resultado").innerText = "Olá "+ nome +" agora que você possui " + idade + " anos você pode tirar carteira de motorista";
    }else{
        let diferenca = 18 - idade;
        document.getElementById("resultado").innerText = "Olá " + nome + ", volte em " + diferenca + " anos";
    }
}