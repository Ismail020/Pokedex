<x-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-[50%]">
        <div class="bg-gray-200 rounded">
            <div class="flex justify-center mt-52">
                <div class="relative -mt-[250px]"><img class="w-80" id="img" src="" alt=""></div>
            </div>

            <div class="flex justify-center mt-3">
                <p class="text-3xl" id="name"></p>
            </div>
            <div id="types" class="flex justify-center mt-3">

            </div>
            <img id="evo1img" src="" alt="">
            <img id="evo2img" src="" alt="">
            <img id="evo3img" src="" alt="">
        </div>
    </div>

    <script>
        (async () => {
            url = `https://pokeapi.co/api/v2/pokemon/{{ $pokemon }}/`

            await $.getJSON(url, data => {
                species = data.species.url;
            });

            await $.when(
                $.getJSON(url)
                , $.getJSON(species)
            ).done(function(result1, result2) {
                $.getJSON(result2[0].evolution_chain.url, data => {
                    console.log(data.chain.species.name);
                    console.log(data.chain.evolves_to[0].species.name);
                    console.log(data.chain.evolves_to[0].evolves_to[0].species.name);

                    let evo1 = data.chain.species.name;
                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo1}/`, data => {
                        document.getElementById("evo1img").src = data.sprites.other.home.front_default;
                    });

                    let evo2 = data.chain.evolves_to[0].species.name;
                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo2}/`, data => {
                        document.getElementById("evo2img").src = data.sprites.other.home.front_default;
                    });

                    let evo3 = data.chain.evolves_to[0].evolves_to[0].species.name;
                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo3}/`, data => {
                        document.getElementById("evo3img").src = data.sprites.other.home.front_default;
                    });

                    const type1 = document.createElement('p');
                    type1.classList.add("typecolor");

                    function typecolor(x, y) {
                        if (result1[0].types[x].type.name == 'fire') {
                            y.style.backgroundColor = "#fd7d24"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'grass') {
                            y.style.backgroundColor = "#78c850"
                        } else if (result1[0].types[x].type.name == 'water') {
                            y.style.backgroundColor = "#4592c4"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'bug') {
                            y.style.backgroundColor = "#a8b820"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'normal') {
                            y.style.backgroundColor = "#a4acaf"
                        } else if (result1[0].types[x].type.name == 'electric') {
                            y.style.backgroundColor = "#f8d030"
                        } else if (result1[0].types[x].type.name == 'ice') {
                            y.style.backgroundColor = "#98d8d8"
                        } else if (result1[0].types[x].type.name == 'fighting') {
                            y.style.backgroundColor = "#d56723"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'poison') {
                            y.style.backgroundColor = "#a040a0"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'ground') {
                            y.style.backgroundColor = "#e0c068"
                        } else if (result1[0].types[x].type.name == 'flying') {
                            y.style.backgroundColor = "#3dc7ef"
                        } else if (result1[0].types[x].type.name == 'psychic') {
                            y.style.backgroundColor = "#f85888"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'rock') {
                            y.style.backgroundColor = "#b8a038"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'ghost') {
                            y.style.backgroundColor = "#705898"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'dark') {
                            y.style.backgroundColor = "#707070"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'dragon') {
                            y.style.backgroundColor = "#7038f8"
                            y.style.color = "white";
                        } else if (result1[0].types[x].type.name == 'steel') {
                            y.style.backgroundColor = "#b8b8d0"
                        } else if (result1[0].types[x].type.name == 'fairy') {
                            y.style.backgroundColor = "#f0b6bc"
                        }
                    }

                    typecolor(0, type1);
                    document.getElementById('types').append(type1)

                    if (result1[0].types[1]) {
                        const type2 = document.createElement('p');
                        type2.classList.add("typecolor");
                        typecolor(1, type2);
                        type2.innerText = result1[0].types[1].type.name;
                        document.getElementById('types').append(type2)
                    }

                    document.getElementById('img').src = result1[0].sprites.other.home.front_default;
                    document.getElementById('name').innerText = result1[0].name[0].toUpperCase() + result1[0].name.slice(1);
                    type1.innerText = result1[0].types[0].type.name;
                    // document.getElementById('id').innerText = '#' + result1[0].id.toString().padStart(3, '0');

                });
            });
        })();

    </script>
</x-layout>

{{-- const type1 = document.createElement('p');
type1.classList.add("typecolor");

function typecolor(x, y) {
    if (result1[0].types[x].type.name == 'fire') {
        y.style.borderColor = "#fd7d24"; 
        y.style.color = "#fd7d24";
        y.innerText = "🔥 Fire";
    } else if (result1[0].types[x].type.name == 'grass') {
        y.style.borderColor = "#78c850"
        y.style.color = "#78c850";
        y.innerText = "🌱 Grass";
    } else if (result1[0].types[x].type.name == 'water') {
        y.style.borderColor = "#4592c4"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'bug') {
        y.style.borderColor = "#a8b820"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'normal') {
        y.style.borderColor = "#a4acaf"
    } else if (result1[0].types[x].type.name == 'electric') {
        y.style.borderColor = "#f8d030"
    } else if (result1[0].types[x].type.name == 'ice') {
        y.style.borderColor = "#98d8d8"
    } else if (result1[0].types[x].type.name == 'fighting') {
        y.style.borderColor = "#d56723"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'poison') {
        y.style.borderColor = "#a040a0"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'ground') {
        y.style.borderColor = "#e0c068"
    } else if (result1[0].types[x].type.name == 'flying') {
        y.style.borderColor = "#3dc7ef"
    } else if (result1[0].types[x].type.name == 'psychic') {
        y.style.borderColor = "#f85888"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'rock') {
        y.style.borderColor = "#b8a038"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'ghost') {
        y.style.borderColor = "#705898"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'dark') {
        y.style.borderColor = "#707070"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'dragon') {
        y.style.borderColor = "#7038f8"
        y.style.color = "white";
    } else if (result1[0].types[x].type.name == 'steel') {
        y.style.borderColor = "#b8b8d0"
    } else if (result1[0].types[x].type.name == 'fairy') {
        y.style.borderColor = "#f0b6bc"
    }
}

typecolor(0, type1);
document.getElementById('types').append(type1)

if (result1[0].types[1]) {
    const type2 = document.createElement('p');
    type2.classList.add("typecolor");
    typecolor(1, type2);
    type2.innerText = result1[0].types[1].type.name;
    document.getElementById('types').append(type2)
} --}}