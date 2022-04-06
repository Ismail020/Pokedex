<x-layout>
    <div class="flex justify-center flex-col">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="poke_container" class="flex grid md2:grid-cols-4 lg2:grid-cols-5 gap-3 sm3:grid-cols-3 sm2:grid-cols-2 sm:grid-cols-1">

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

                type1.classList.add("typecolorall");

                function typecolor(x, y) {
                    if (pokemon.types[x].type.name == 'fire') {
                        var img = document.createElement("img");
                        img.src = '/img/box/fire.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'grass') {
                        var img = document.createElement("img");
                        img.src = '/img/box/grass.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'water') {
                        var img = document.createElement("img");
                        img.src = '/img/box/water.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'bug') {
                        var img = document.createElement("img");
                        img.src = '/img/box/bug.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'normal') {
                        var img = document.createElement("img");
                        img.src = '/img/box/normal.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'electric') {
                        var img = document.createElement("img");
                        img.src = '/img/box/electric.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'ice') {
                        var img = document.createElement("img");
                        img.src = '/img/box/ice.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'fighting') {
                        var img = document.createElement("img");
                        img.src = '/img/box/fighting.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'poison') {
                        var img = document.createElement("img");
                        img.src = '/img/box/poison.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'ground') {
                        var img = document.createElement("img");
                        img.src = '/img/box/ground.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'flying') {
                        var img = document.createElement("img");
                        img.src = '/img/box/flying.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'psychic') {
                        var img = document.createElement("img");
                        img.src = '/img/box/psychic.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'rock') {
                        var img = document.createElement("img");
                        img.src = '/img/box/rock.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'ghost') {
                        var img = document.createElement("img");
                        img.src = '/img/box/ghost.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'dark') {
                        var img = document.createElement("img");
                        img.src = '/img/box/dark.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'dragon') {
                        var img = document.createElement("img");
                        img.src = '/img/box/dragon.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'steel') {
                        var img = document.createElement("img");
                        img.src = '/img/box/steel.svg';
                        y.appendChild(img);
                    } else if (pokemon.types[x].type.name == 'fairy') {
                        var img = document.createElement("img");
                        img.src = '/img/box/fairy.svg';
                        y.appendChild(img);
                    }
                }

                typecolor(0, type1);
                ul.append(type1)

                if (types[1]) {
                    const type2 = document.createElement('p');
                    type2.classList.add("typecolorall2");
                    typecolor(1, type2);
                    ul.append(type2)
                }

            }

            const pokeInnerHTML = `
            <a href="/${pokemon.id}">
                <div class="bg-white mt-20 border-none rounded-2xl shadow-lg min-w-52 w-52 max-w-52 h-36 ">
                    <div class="img-container p-6">
                        <div>
                            <img class="rounded -mt-24 mx-auto w-24 " src="${pokemon.sprites.other.home.front_default}" />
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-500 text-sm mx-auto">N°${pokemon.id.toString().padStart(3, '0')}</span>
                        <h3 id="test" class="font-medium text-lg mx-auto">${name}</h3>
                        
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
