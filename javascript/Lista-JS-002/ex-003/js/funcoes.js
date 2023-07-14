function Salvar(){
    //pegar as informações
    let nome = document.getElementById("nome").value;
    let telefone = document.getElementById("telefone").value;

    //colocar as informações dentro da lista
    document.getElementById("agenda").innerHTML += "<li>" + nome + " - " + telefone + "</li>";

    //PLUS - limpando os campos
    document.getElementById("nome").value = "";
    document.getElementById("telefone").value = "";

    //adicionando o cursor no campo nome
    document.getElementById("nome").focus();
}