const fetchPokemon = () => {

    const pokemonPromises = []
    let html = ""

    for (let i = 1; i <= 150; i++) {
        let url = 'https://pokeapi.co/api/v2/pokemon/' + i

        pokemonPromises.push(
            fetch(url)
            .then(response => response.json())
        )
    }

    Promise.all(pokemonPromises)
        .then(pokemons => {
            pokemons.forEach(pokemon => {
                let tipo = pokemon.types[0].type.name
                let id_imagem
                if(pokemon.id < 10){
                    id_imagem = '00' + pokemon.id
                }else if(pokemon.id < 100){
                    id_imagem = '0' + pokemon.id
                }else{
                    id_imagem = pokemon.id
                }

                html += `
                    <li class="cartao ${tipo}">
                        <h2 class="cartao-titulo">${pokemon.id} - ${pokemon.name}</h2>
                        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/${id_imagem}.png">
                        <h3 class="cartao-subtitulo">${tipo}</h3>
                    </li>
                `
            });
            document.querySelector(".pokedex").innerHTML = html
            
        })   
}
fetchPokemon()