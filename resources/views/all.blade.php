<x-layout>
    <div class="flex justify-center flex-col">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="poke_container" class="flex grid md:grid-cols-4 lg:grid-cols-5 gap-4 sm:grid-cols-1">

            </div>
        </div>
        <div class="mb-32 mt-10 mx-auto">
            <button id="more" type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#2a75bb] hover:bg-[#1c4e7d] focus:outline-none">Load more</button>
        </div>
    </div>

    <script>
        const poke_container = document.getElementById('poke_container');
        const more = document.querySelector("#more");
        let pokemons_number = 20;

        let limit = 19;
        let offset = 1;

        more.addEventListener("click", () => {
            offset += 20;
            fetchPokemons(offset, limit);
        });

        const fetchPokemons = async () => {
            for (let i = offset; i <= offset + limit; i++) {
                await getPokemon(i);
            }
        };

        const getPokemon = async id => {
            const url = `https://pokeapi.co/api/v2/pokemon/${id}`;
            const res = await fetch(url);
            const pokemon = await res.json();
            createPokemonCard(pokemon);
        };

        function createPokemonCard(pokemon) {
            const pokemonEl = document.createElement('div');
            const pokeTypes = document.createElement('ul');
            const name = pokemon.name[0].toUpperCase() + pokemon.name.slice(1);

            createTypes(pokemon.types, pokeTypes)
            pokeTypes.classList.add("type");
            pokemonEl.classList.add("grow");

            function createTypes(types, ul) {
                const type1 = document.createElement('p');
                const type2 = document.createElement('p');

                type1.classList.add("typecolor");
                type2.classList.add("typecolor");

                type1.innerText = types[0]['type']['name'];

                function typecolor(x, y) {
                    if (pokemon.types[x].type.name == 'fire') {
                        y.style.backgroundColor = "#fd7d24"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'grass') {
                        y.style.backgroundColor = "#78c850"
                    } else if (pokemon.types[x].type.name == 'water') {
                        y.style.backgroundColor = "#4592c4"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'bug') {
                        y.style.backgroundColor = "#a8b820"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'normal') {
                        y.style.backgroundColor = "#a4acaf"
                    } else if (pokemon.types[x].type.name == 'electric') {
                        y.style.backgroundColor = "#f8d030"
                    } else if (pokemon.types[x].type.name == 'ice') {
                        y.style.backgroundColor = "#98d8d8"
                    } else if (pokemon.types[x].type.name == 'fighting') {
                        y.style.backgroundColor = "#d56723"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'poison') {
                        y.style.backgroundColor = "#a040a0"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'ground') {
                        y.style.backgroundColor = "#e0c068"
                    } else if (pokemon.types[x].type.name == 'flying') {
                        y.style.backgroundColor = "#3dc7ef"
                    } else if (pokemon.types[x].type.name == 'psychic') {
                        y.style.backgroundColor = "#f85888"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'rock') {
                        y.style.backgroundColor = "#b8a038"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'ghost') {
                        y.style.backgroundColor = "#705898"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'dark') {
                        y.style.backgroundColor = "#707070"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'dragon') {
                        y.style.backgroundColor = "#7038f8"
                        y.style.color = "white";
                    } else if (pokemon.types[x].type.name == 'steel') {
                        y.style.backgroundColor = "#b8b8d0"
                    } else if (pokemon.types[x].type.name == 'fairy') {
                        y.style.backgroundColor = "#f0b6bc"
                    }
                }

                typecolor(0, type1);

                if (types[1]) {
                    typecolor(1, type2);
                    type2.innerText = types[1]['type']['name'];
                }

                ul.append(type1)
                ul.append(type2)
            }

            const pokeInnerHTML = `
            <a href="/${pokemon.id}">
                <div>
                    <div class="img-container p-6">
                        <div>
                            <img class="rounded w-96 bg-gray-200 " src="${pokemon.sprites.other.home.front_default}" />
                            <span class="text-gray-500 ml-2 text-sm">Nr.${pokemon.id.toString().padStart(3, '0')}</span>
                        </div>
                    </div>
                    <div class="text-left -mt-5 pb-5 ml-8">
                        <h3 id="test" class="font-medium text-lg">${name}</h3>
                    </div>
                </div>
            </a>
            `;


            pokemonEl.innerHTML = pokeInnerHTML;

            poke_container.appendChild(pokemonEl);
            pokemonEl.appendChild(pokeTypes);
        }

        fetchPokemons();

    </script>
</x-layout>
