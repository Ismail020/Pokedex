<x-layout>
    <div class="container mx-auto sm:px-6 lg:px-28">
        <div class=" drop-shadow-2xl rounded grid grid-cols-2">
            <div class="flex justify-start">
                <img class="object-contain w-96 z-50" id="img" src="" alt="">
                <p id="japan" class="text-transparent absolute z-0 text-7xl vamp mt-[350px]"></p>
            </div>

            <div>
                <div class="flex flex-col">
                    <div>
                        <p class="text-transparent absolute z-0 text-9xl -mt-8 ml-52 vamp" id="tag"></p>
                    </div>
                    <div class="ml-3 z-50 drop-shadow-2xl">
                        <p class="text-6xl text-white drop-shadow-2xl" id="name"></p>
                    </div>
                </div>
                <div class="flex flex-row w-24 ml-3 mt-5">
                    <div id="types" class="flex flex-row">
                    </div>
                </div>
                <div>
                    <div class="flex flex-row ml-3 mt-5">
                        <div>
                            <div class="flex flex-row">
                                <p class="text-xs mr-1 text-white">Height:</p>
                                <p class="text-xs text-gray-400" id="height"></p>
                            </div>
                            <div class="flex flex-row">
                                <p class="text-xs mr-1 text-white">Weight:</p>
                                <p class="text-xs text-gray-400 " id="weight"></p>
                            </div>
                        </div>
                    </div>
                    <div class="ml-3 mt-5">
                        <p class="text-white">Pokedex entry:</p>
                        <p class="text-sm font-light text-white" id="flavor"></p>
                    </div>
                </div>

                <div class="ml-3">
                    <p class="mt-5 text-white">Base stats:</p>

                    <div>
                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-red-600 flex items-center justify-center">HP</p>
                            <p id="hp" class="text-xs mt-1">40</p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-orange-400 flex items-center justify-center">ATK</p>
                            <p id="attack" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-yellow-400 flex items-center justify-center">DEF</p>
                            <p id="defense" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-blue-400 flex items-center justify-center">SpA</p>
                            <p id="sp_attack" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-green-400 flex items-center justify-center">SpD</p>
                            <p id="sp_defense" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-pink-400 flex items-center justify-center">SPD</p>
                            <p id="speed" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-purple-500 flex items-center justify-center">TOT</p>
                            <p id="total" class="text-xs mt-1"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-col grid grid-cols-3 mt-20 mb-20">
            <div>
                <div class="flex ">
                    <p class="text-white mb-5 font-medium">EVOLUTION</p>
                </div>
                <div id="evo" class="flex grid grid-cols-3 gap-2 mr-14 ">
                    {{-- <div class="border-none rounded-full bg-gray-100 mr-2">
                        <img id="evo1img" src="" alt="">
                    </div>
                    <div class="border-none rounded-full bg-gray-100 mr-2">
                        <img id="evo2img" src="" alt="">
                    </div>
                    <div class="border-none rounded-full bg-gray-100 mr-2">
                        <img id="evo3img" src="" alt="">
                    </div> --}}
                </div>
            </div>
            <div class="flex flex-col ml-3">
                <div class="">
                    <p class="text-white mb-5 font-medium">ABILITIES</p>
                </div>
                <div id="abilities" class="flex flex-col text-sm font-light">
                </div>
            </div>
        </div>

    </div>
    <div class="cont">
        <div class="loader">
            <div class="ball"><img src="/img/loader/poke.webp" alt=""></div>
            <div class="ball"><img src="/img/loader/great.webp" alt=""></div>
            <div class="ball"><img src="/img/loader/master.webp" alt=""></div>
            <div class="ball"><img src="/img/loader/ultra.webp" alt=""></div>
            <div class="ball"><img src="/img/loader/premier.png" alt=""></div>
        </div>
        <div>
            <p class="mt-5">
                Loading pokemon...
            </p>
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
                    evodiv = document.getElementById('evo');
                    let evo1 = data.chain.species.name;
                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo1}/`, data => {
                        var divevo = document.createElement("div");
                        divevo.classList.add("evo");
                        var imgevo = document.createElement("img");
                        imgevo.src = data.sprites.front_default;
                        evodiv.appendChild(divevo);
                        divevo.appendChild(imgevo);
                        divevo.onclick = function() {
                            location.href = '{{ env('
                            url ') }}' + evo1;
                        };
                    });

                    if (data.chain.evolves_to.length > 0) {
                        let evo2 = data.chain.evolves_to;

                        evo2.forEach(element => {
                            let evo2 = element.species.name;
                            console.log(element.species);
                            $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo2}/`, data => {
                                var divevo = document.createElement("div");
                                divevo.classList.add("evo");
                                var imgevo = document.createElement("img");
                                imgevo.src = data.sprites.front_default;
                                evodiv.appendChild(divevo);
                                divevo.appendChild(imgevo);
                                divevo.onclick = function() {
                                    location.href = '{{ env('
                                    url ') }}' + evo2;
                                };
                            });
                        });

                        if (data.chain.evolves_to[0].evolves_to[0]) {
                            let evo3 = data.chain.evolves_to;
                            evo3.forEach(element => {
                                console.log(evo3[0].evolves_to);
                                let evoevo3 = evo3[0].evolves_to;
                                evoevo3.forEach(element => {
                                    let evo3name = element.species.name;
                                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo3name}/`, data => {
                                        var divevo = document.createElement("div");
                                        divevo.classList.add("evo");
                                        var imgevo = document.createElement("img");
                                        imgevo.src = data.sprites.front_default;
                                        evodiv.appendChild(divevo);
                                        divevo.appendChild(imgevo);
                                        divevo.onclick = function() {
                                            location.href = '{{ env('
                                            url ') }}' + evo3name;
                                        };
                                    });
                                })
                            })
                        }
                    }


                    const type1 = document.createElement('div');
                    type1.classList.add("typecolor");

                    function typecolor(x, y) {
                        if (result1[0].types[x].type.name == 'fire') {
                            var img = document.createElement("img");
                            img.src = '/img/box/fire.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'grass') {
                            var img = document.createElement("img");
                            img.src = '/img/box/grass.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'water') {
                            var img = document.createElement("img");
                            img.src = '/img/box/water.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'bug') {
                            var img = document.createElement("img");
                            img.src = '/img/box/bug.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'normal') {
                            var img = document.createElement("img");
                            img.src = '/img/box/normal.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'electric') {
                            var img = document.createElement("img");
                            img.src = '/img/box/electric.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'ice') {
                            var img = document.createElement("img");
                            img.src = '/img/box/ice.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'fighting') {
                            var img = document.createElement("img");
                            img.src = '/img/box/fighting.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'poison') {
                            var img = document.createElement("img");
                            img.src = '/img/box/poison.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'ground') {
                            var img = document.createElement("img");
                            img.src = '/img/box/ground.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'flying') {
                            var img = document.createElement("img");
                            img.src = '/img/box/flying.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'psychic') {
                            var img = document.createElement("img");
                            img.src = '/img/box/psychic.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'rock') {
                            var img = document.createElement("img");
                            img.src = '/img/box/rock.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'ghost') {
                            var img = document.createElement("img");
                            img.src = '/img/box/ghost.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'dark') {
                            var img = document.createElement("img");
                            img.src = '/img/box/dark.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'dragon') {
                            var img = document.createElement("img");
                            img.src = '/img/box/dragon.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'steel') {
                            var img = document.createElement("img");
                            img.src = '/img/box/steel.svg';
                            y.appendChild(img);
                        } else if (result1[0].types[x].type.name == 'fairy') {
                            var img = document.createElement("img");
                            img.src = '/img/box/fairy.svg';
                            y.appendChild(img);
                        }
                    }

                    typecolor(0, type1);
                    document.getElementById('types').append(type1)

                    if (result1[0].types[1]) {
                        const type2 = document.createElement('div');
                        type2.classList.add("typecolor");
                        typecolor(1, type2);
                        document.getElementById('types').append(type2)
                    }

                    imggg = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${result1[0].id}.png`
                    document.getElementById('img').src = imggg;
                    document.getElementById('img').crossOrigin = "anonymous";
                    document.getElementById('name').innerText = result1[0].name[0].toUpperCase() + result1[0].name.slice(1);
                    // type1.innerText = result1[0].types[0].type.name;
                    document.getElementById('height').innerText = result1[0].height / 10 + " m";
                    document.getElementById('weight').innerText = result1[0].weight / 10 + " kg";
                    document.getElementById('tag').innerText = result1[0].id.toString().padStart(3, '0');
                    document.getElementById('hp').innerText = result1[0].stats[0].base_stat;
                    document.getElementById('attack').innerText = result1[0].stats[1].base_stat;
                    document.getElementById('defense').innerText = result1[0].stats[2].base_stat;
                    document.getElementById('sp_attack').innerText = result1[0].stats[3].base_stat;
                    document.getElementById('sp_defense').innerText = result1[0].stats[4].base_stat;
                    document.getElementById('speed').innerText = result1[0].stats[5].base_stat;
                    document.getElementById('total').innerText = result1[0].stats.reduce((a, b) => a + b.base_stat, 0);

                    info = result2[0].flavor_text_entries;
                    info.forEach(element => {
                        if (element.language.name == "en") {
                            let desc = element.flavor_text
                            document.getElementById('flavor').innerText = desc.replace(/\n/g, ' ');
                        }
                    });

                    document.getElementById('japan').innerText = result2[0].names[0].name;

                    let abilitiesarray = result1[0].abilities;
                    abilitiesarray.forEach(element => {
                        const ability = document.createElement('p');
                        const info = document.createElement('p');
                        ability.classList.add("ability");
                        info.classList.add("info");
                        $.getJSON(element.ability.url, function(result) {
                            let slice = result.name.replace(/-/g, ' ');
                            ability.innerText = slice.charAt(0).toUpperCase() + slice.slice(1);
                            tist = result.effect_entries;
                            tist.forEach(element => {
                                if (element.language.name == "en") {
                                    info.innerText = element.short_effect;
                                }
                            });

                            document.getElementById('abilities').append(ability);
                            document.getElementById('abilities').append(info);
                        });
                    })

                    function getAverageColor(imageElement, ratio) {
                        const canvas = document.createElement("canvas")

                        let height = canvas.height = imageElement.naturalHeight
                        let width = canvas.width = imageElement.naturalWidth

                        const context = canvas.getContext("2d")
                        context.drawImage(imageElement, 0, 0)

                        let data, length
                        let i = -4
                            , count = 0

                        try {
                            data = context.getImageData(0, 0, width, height)
                            length = data.data.length
                        } catch (err) {
                            console.error(err)
                            return {
                                R: 0
                                , G: 0
                                , B: 0
                            }
                        }
                        let R, G, B
                        R = G = B = 0

                        while ((i += ratio * 4) < length) {
                            ++count

                            R += data.data[i]
                            G += data.data[i + 1]
                            B += data.data[i + 2]
                        }

                        R = ~~(R / count)
                        G = ~~(G / count)
                        B = ~~(B / count)

                        return {
                            R
                            , G
                            , B
                        }
                    }

                    const image = document.querySelector("img")
                    image.onload = () => {
                        const {
                            R
                            , G
                            , B
                        } = getAverageColor(image, 4)

                        document.body.style.background = `rgb(${R}, ${G},${B})`
                        // document.body.style.background = `radial-gradient(rgb(${R}, ${G},${B}), #fff)`

                    }
                });
            });
        })();

        $(window).on('load', function() {
            setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
        });

        function removeLoader() {
            $(".cont").fadeOut(500, function() {
                // fadeOut complete. Remove the loading div
                $(".cont").remove(); //makes page more lightweight 
            });
        }

    </script>
</x-layout>

{{--
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-w-[50%]">
        <div class="bg-gray-200 rounded">
            <div class=" m-20">
                <div class="flex justify-center mt-52">
                    <div class="relative -mt-[250px]"><img class="w-80" id="img" src="" alt=""></div>
                </div>

                <div class="flex justify-center mt-3">
                    <p class="text-3xl" id="name"></p>
                </div>
                <div id="types" class="flex justify-center mt-3">

                </div>

                <div>
                    <div class="flex justify-start mt-3">
                        <p class="text-base" id="height"></p>
                    </div>
                    <div class="flex justify-start mt-3">
                        <p class="text-base" id="weight"></p>
                    </div>
                </div>

                <img id="evo1img" src="" alt="">
                <img id="evo2img" src="" alt="">
                <img id="evo3img" src="" alt="">
            </div>
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
let evo1 = data.chain.species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo1}/`, data => {
document.getElementById("evo1img").src = data.sprites.other.home.front_default;
});

if (data.chain.evolves_to[0]) {
let evo2 = data.chain.evolves_to[0].species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo2}/`, data => {
document.getElementById("evo2img").src = data.sprites.other.home.front_default;
});
}

if (data.chain.evolves_to[0].evolves_to[0]) {
let evo3 = data.chain.evolves_to[0].evolves_to[0].species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo3}/`, data => {
document.getElementById("evo3img").src = data.sprites.other.home.front_default;
});
}

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
document.getElementById('height').innerText = "Height: " + result1[0].height / 10 + " m";
document.getElementById('weight').innerText = "Weight: " + result1[0].weight / 10 + " kg";
// document.getElementById('id').innerText = '#' + result1[0].id.toString().padStart(3, '0');

});
});
})();

</script>
--}}


{{-- <div class="container mx-auto sm:px-6 lg:px-28 md:bg-blue-300">
    <div class="bg-white drop-shadow-2xl rounded ">
        <div class="flex flex-col">
            <div class="mt-5 ml-5">
                <p class="text-gray-500" id="tag"></p>
            </div>
            <div class="flex justify-start ml-5">
                <p class="text-3xl" id="name"></p>
            </div>
        </div>
        <div class="m-5 grid grid-cols-6">
            <div class="col-span-1">
                <div class="flex flex-row">
                    <div class="content-center mt-32 ">
                        <div class="flex flex-row">
                            <p class="text-sm mr-1">Height:</p>
                            <p class="text-sm text-gray-500" id="height"></p>
                        </div>
                        <div class="flex flex-row">
                            <p class="text-sm mr-1">Weight:</p>
                            <p class="text-sm text-gray-500" id="weight"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ml-14  col-span-4">
                <img class="object-cover w-72" id="img" src="" alt="">
            </div>


            <div class="flex justify-center col-span-1 mb-[80px]">
                <div class="flex flex-col justify-center ">
                    <div class="flex flex-row" id="types">

                    </div>

                    <p class="mt-10 mb-2 text-xl">BASE STATS:</p>

                    <div>
                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-red-600 flex items-center justify-center">HP</p>
                            <p id="hp" class="text-xs">40</p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-orange-400 flex items-center justify-center">ATK</p>
                            <p id="attack" class="text-xs"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-yellow-400 flex items-center justify-center">DEF</p>
                            <p id="defense" class="text-xs"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-blue-400 flex items-center justify-center">SpA</p>
                            <p id="sp_attack" class="text-xs"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-green-400 flex items-center justify-center">SpD</p>
                            <p id="sp_defense" class="text-xs"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-pink-400 flex items-center justify-center">SPD</p>
                            <p id="speed" class="text-xs"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-8 h-8 text-center bg-purple-500 flex items-center justify-center">TOT</p>
                            <p id="total" class="text-xs"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-5">
            <p class="text-sm font-light" id="flavor"></p>
        </div>
        <div class="flex justify-center">
            <p class="text-2xl mb-5 font-medium">EVOLUTION</p>
        </div>
        <div class="flex col-row justify-center space-x-2">
            <div class="border-none rounded-full bg-gray-100">
                <img id="evo1img" src="" alt="">
            </div>
            <div class="border-none rounded-full bg-gray-100">
                <img id="evo2img" src="" alt="">
            </div>
            <div class="border-none rounded-full bg-gray-100">
                <img id="evo3img" src="" alt="">
            </div>
        </div>
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
let evo1 = data.chain.species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo1}/`, data => {
document.getElementById("evo1img").src = data.sprites.front_default;
});

if (data.chain.evolves_to[0]) {
let evo2 = data.chain.evolves_to[0].species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo2}/`, data => {
document.getElementById("evo2img").src = data.sprites.front_default;

arrowdiv = document.getElementById("arrow");
var arrow1 = document.createElement("img");
arrow1.src = '/img/arrow.svg';
arrowdiv.appendChild(arrow1);
});
}

if (data.chain.evolves_to[0].evolves_to[0]) {
let evo3 = data.chain.evolves_to[0].evolves_to[0].species.name;
$.getJSON(`https://pokeapi.co/api/v2/pokemon/${evo3}/`, data => {
document.getElementById("evo3img").src = data.sprites.front_default;
});
}

const type1 = document.createElement('div');
type1.classList.add("typecolor");

function typecolor(x, y) {
if (result1[0].types[x].type.name == 'fire') {
var img = document.createElement("img");
img.src = '/img/fire.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'grass') {
var img = document.createElement("img");
img.src = '/img/grass.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'water') {
var img = document.createElement("img");
img.src = '/img/water.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'bug') {
var img = document.createElement("img");
img.src = '/img/bug.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'normal') {
var img = document.createElement("img");
img.src = '/img/normal.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'electric') {
var img = document.createElement("img");
img.src = '/img/electric.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'ice') {
var img = document.createElement("img");
img.src = '/img/ice.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'fighting') {
var img = document.createElement("img");
img.src = '/img/fighting.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'poison') {
var img = document.createElement("img");
img.src = '/img/poison.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'ground') {
var img = document.createElement("img");
img.src = '/img/ground.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'flying') {
var img = document.createElement("img");
img.src = '/img/flying.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'psychic') {
var img = document.createElement("img");
img.src = '/img/psychic.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'rock') {
var img = document.createElement("img");
img.src = '/img/rock.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'ghost') {
var img = document.createElement("img");
img.src = '/img/ghost.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'dark') {
var img = document.createElement("img");
img.src = '/img/dark.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'dragon') {
var img = document.createElement("img");
img.src = '/img/dragon.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'steel') {
var img = document.createElement("img");
img.src = '/img/steel.svg';
y.appendChild(img);
} else if (result1[0].types[x].type.name == 'fairy') {
var img = document.createElement("img");
img.src = '/img/fairy.svg';
y.appendChild(img);
}
}

typecolor(0, type1);
document.getElementById('types').append(type1)

if (result1[0].types[1]) {
const type2 = document.createElement('div');
type2.classList.add("typecolor");
typecolor(1, type2);
// type2.innerText = result1[0].types[1].type.name;
document.getElementById('types').append(type2)
}

document.getElementById('img').src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${result1[0].id}.png`;
document.getElementById('name').innerText = result1[0].name[0].toUpperCase() + result1[0].name.slice(1);
// type1.innerText = result1[0].types[0].type.name;
document.getElementById('height').innerText = result1[0].height / 10 + " m";
document.getElementById('weight').innerText = result1[0].weight / 10 + " kg";
document.getElementById('tag').innerText = '#' + result1[0].id.toString().padStart(3, '0');
document.getElementById('hp').innerText = result1[0].stats[0].base_stat;
document.getElementById('attack').innerText = result1[0].stats[1].base_stat;
document.getElementById('defense').innerText = result1[0].stats[2].base_stat;
document.getElementById('sp_attack').innerText = result1[0].stats[3].base_stat;
document.getElementById('sp_defense').innerText = result1[0].stats[4].base_stat;
document.getElementById('speed').innerText = result1[0].stats[5].base_stat;
document.getElementById('total').innerText = result1[0].stats.reduce((a, b) => a + b.base_stat, 0);
document.getElementById('flavor').innerText = result2[0].flavor_text_entries[0].flavor_text;
});
});
})();

</script> --}}
