<x-layout>
    <div class="flex justify-center flex-col">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="nav">
                <div class=" flex inline-flex nav ">
                    <div x-data="{ open: false }" class="relative inline-block text-left mr-5 z-50 ">
                        <div>
                            <button x-on:click="open = ! open" class="inline-flex justify-center w-full rounded-md border border-white rounded-3xl shadow-lg px-4 py-2 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Generations
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="open" x-transition @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <button id="gen1" value="1" data-value="151" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen1')" x-on:click="open = false" id="menu-item-0">Gen I 001/151</button>
                                <button id="gen2" value="152" data-value="100" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen2')" x-on:click="open = false" id="menu-item-1">Gen II 152/251</button>
                                <button id="gen3" value="252" data-value="135" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen3')" x-on:click="open = false" id="menu-item-2">Gen III 252/386</button>
                                <button id="gen4" value="387" data-value="107" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen4')" x-on:click="open = false" id="menu-item-2">Gen IV 387/493</button>
                                <button id="gen5" value="494" data-value="156" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen5')" x-on:click="open = false" id="menu-item-2">Gen V 494/649</button>
                                <button id="gen6" value="650" data-value="72" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen6')" x-on:click="open = false" id="menu-item-2">Gen VI 650/721</button>
                                <button id="gen7" value="722" data-value="88" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen7')" x-on:click="open = false" id="menu-item-2">Gen VII 722/809</button>
                                <button id="gen8" value="810" data-value="89" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="gen('gen8')" x-on:click="open = false" id="menu-item-2">Gen VIII 810/898</button>
                            </div>
                        </div>
                    </div>
                    <form class="randomm1">
                        <div x-data="{
                                query: '',
                                allurl: '',
                                allnames: '',
                                
                                init () {
                                    this.allurl = `https://pokeapi.co/api/v2/pokemon/?limit=1126`
                    
                                    $.getJSON(this.allurl, data => {
                                        this.allnames = data.results;
                                    });
                                }
                            }">
                            <input list="pokemon" type="search" class="block max-w-[150px]  px-3 py-1.5 text-base  text-gray-400 border border-white rounded-3xl transition ease-in-out outline-none m-0 shadow-lg" id="exampleSearch" placeholder="Search..." />
                            <datalist id="pokemon">
                                <template x-for="name in allnames">
                                    <option x-bind:value="name.name">
                                </template>
                            </datalist>
                        </div>
                    </form>
                    <div id="left" class="flex inline-flex">

                    </div>
                </div>
            </div>
            <div id="poke_container" class="flex grid md2:grid-cols-4 lg2:grid-cols-5 gap-3 sm3:grid-cols-3 sm2:grid-cols-2 sm:grid-cols-1">

            </div>
        </div>
        <div id="buttonmore" class="mb-32 mt-10 mx-auto">
            <div class="grid gap-8 items-start justify-center">
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-400 to-yellow-400  rounded-lg blur opacity-75"></div>
                    <button id="more" class="relative px-7 py-4 bg-white rounded-lg leading-none flex items-center divide-x divide-gray-600">
                        <span class="text-black">Load more</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function randomIntFromInterval(min, max) { // min and max included 
            return Math.floor(Math.random() * (max - min + 1) + min)
        }
        const rndInt = randomIntFromInterval(1, 898)

        var aRandom = document.createElement('a');
        aRandom.setAttribute('href', '/' + rndInt);
        var left = document.getElementById('left');
        var poke = document.createElement("img");
        poke.src = "/img/loader/master.webp";
        poke.classList.add("random1");
        left.appendChild(aRandom);
        aRandom.appendChild(poke);

        const poke_container = document.getElementById('poke_container');
        const more = document.querySelector("#more");
        let pokemons_number = 20;

        function gen(y) {
            document.getElementById("buttonmore").style.display = "none";
            document.getElementById("poke_container").style.marginBottom = "128px";
            var value = document.getElementById(y);
            limit = value.getAttribute("data-value");
            offset = value.value;
            removeChildNodes(poke_container);
            check = true;
            fetchPokemonss();
        }

        var check = false;


        function removeChildNodes(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }

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

        const fetchPokemonss = async () => {
            for (let i = 1; i <= limit; offset++) {
                i++;
                await getPokemon(offset);
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
