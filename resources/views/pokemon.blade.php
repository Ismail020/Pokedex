<x-layout>
    <div id="hidden" class="container mx-auto hidden">
        <div class="flex justify-center gird grid-cols-2">

            <div class="mt-auto mb-auto">
                <p>Pokemon not found!</p>
            </div>
            <div>
                <img src="/img/404/psy.png" alt="">
            </div>
        </div>
    </div>
    <div id="all" class="max-w-7xl mx-auto sm:px-6 lg:px-28 s:overflow-hidden md2:overflow-visible sm3:mt-10">
        <div id="nav">
            <div class=" flex inline-flex nav">
                <form class="flex inline-flex randomm">
                    <div class="flex justify-center">
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
                            <input list="pokemon" type="search" class="
                              form-control
                              block
                              w-40 
                              px-3
                              py-1.5
                              text-base
                              font-normal
                              text-gray-400 
                              border  border-white
                              rounded-3xl  
                              transition
                              ease-in-out
                              outline-none 
                              m-0
                            " id="exampleSearch" placeholder="Search..." />
                            <datalist id="pokemon">
                                <template x-for="name in allnames">
                                    <option x-bind:value="name.name">
                                </template>
                            </datalist>
                        </div>
                    </div>
                </form>
                <div id="left" class="flex inline-flex">

                </div>
            </div>
        </div>
        <div class=" drop-shadow-2xl rounded grid s:grid-cols-1 md2:grid-cols-2">
            <div class="flex s:justify-center md2:justify-start">
                <img class="object-contain s:w-52 md2:w-96 z-50" id="img" src="" alt="">
                <p id="japan" class="text-transparent absolute z-0 text-7xl vamp mt-[350px] s:invisible md2:visible"></p>
            </div>

            <div>
                <div class="flex flex-col">
                    <div class="s:flex s:justify-center md2:justify-start">
                        <div>
                            <p class="text-transparent absolute z-0 text-9xl -mt-8 ml-52 vamp s:invisible md2:visible" id="tag"></p>
                        </div>
                        <div class="md2:ml-3 z-50 drop-shadow-2xl">
                            <p class="s:text-4xl  md2:text-6xl text-white drop-shadow-2xl" id="name"></p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-row md2:justify-start md2:w-24 s:mt-10  md2:ml-3 md2:mt-5">
                    <div id="types" class="flex flex-row">
                    </div>
                </div>
                <div>
                    <div class="flex flex-row s:mt-3 md2:ml-3 md2:mt-5 s:justify-center md2:justify-start">
                        <div class="flex s:flex-row md2:flex-col">
                            <div class="flex flex-row">
                                <p class="text-xs mr-1 text-white">Height:</p>
                                <p class="text-xs text-gray-400" id="height"></p>
                            </div>
                            <div class="flex flex-row s:ml-2 md2:ml-0">
                                <p class="text-xs mr-1 text-white">Weight:</p>
                                <p class="text-xs text-gray-400 " id="weight"></p>
                            </div>
                        </div>
                    </div>
                    <div class="s:mt-2 md2:ml-3 md2:mt-5">
                        <p class="text-white flex s:justify-center md2:justify-start">Pokedex entry:</p>
                        <p class="text-sm font-light text-white s:text-center md2:text-left" id="flavor"></p>
                    </div>
                </div>

                <div class="md2:ml-3">
                    <p class="s:mt-3 md2:mt-5 text-white flex s:justify-center s:mt-10 md2:justify-start">Base stats:</p>

                    <div class="flex s:justify-center md2:justify-start">
                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-red-600 flex items-center justify-center">HP</p>
                            <p id="hp" class="text-xs mt-1">40</p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-orange-400 flex items-center justify-center">ATK</p>
                            <p id="attack" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-yellow-400 flex items-center justify-center">DEF</p>
                            <p id="defense" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-blue-400 flex items-center justify-center">SpA</p>
                            <p id="sp_attack" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-green-400 flex items-center justify-center">SpD</p>
                            <p id="sp_defense" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-pink-400 flex items-center justify-center">SPD</p>
                            <p id="speed" class="text-xs mt-1"></p>
                        </div>

                        <div class="flex flex-col inline-flex items-center border-none rounded-full p-1 mt-1 mr-1 bg-gray-100">
                            <p class="border-none rounded-full text-xs text-white w-7 h-7 text-center bg-purple-500 flex items-center justify-center">TOT</p>
                            <p id="total" class="text-xs mt-1"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-col grid s:grid-cols-1 md2:grid-cols-3 s:mt-10 md2:mt-20 mb-5">
            <div>
                <div class="flex s:justify-center md2:justify-start">
                    <p class="text-white s:mb-2 md2:mb-5 font-medium">EVOLUTION</p>
                </div>
                <div id="evo" class="flex justify-center md2:grid md2:grid-cols-3 s:gap-2 md2:gap-2 md2:mr-10 s:w-72 md2:w-auto m-auto">
                    <div id="1">
                    </div>
                    <div id="2">
                    </div>
                    <div id="3">
                    </div>
                </div>
                <div id="specialdiv" class="flex s:justify-center md2:justify-start s:mt-2 md2:mt-5">
                    <p id="spectext" class="text-white s:mb-2 md2:mb-5 font-medium"></p>
                </div>
                <div id="special" class="flex s:justify-center grid s:grid-cols-2 md2:grid-cols-3 gap-2 md2:mr-10 s:w-[200px]  md2:w-auto s:m-auto">
                </div>
                <div class="flex s:justify-center md2:justify-start s:mt-2 md2:mt-5">
                    <p id="shinytext" class="text-white s:mb-2 md2:mb-5 font-medium"></p>
                </div>
                <div id="shiny" class="flex justify-center md2:grid md2:grid-cols-3 s:gap-2 md2:gap-2 md2:mr-10 s:w-72 md2:w-auto m-auto">
                </div>
            </div>
            <div class="flex flex-col ml-3 ml-auto mr-auto">
                <div class="flex s:justify-center md2:justify-start s:mt-10 md2:mt-0">
                    <p class="text-white s:mb-2 md2:mb-5 font-medium">ABILITIES</p>
                </div>
                <div id="abilities" class="flex flex-col text-sm s:text-center md2:text-left font-light md2:mr-10 ">
                </div>
            </div>
            <div class="flex flex-col ml-auto mr-auto">
                <div>
                    <p class="flex s:justify-center md2:justify-start text-white mb-5 s:mt-10 md2:mt-0 font-medium">PREVIOUS / NEXT</p>
                </div>
                <div class="flex flex-row grid-cols-4 gap-2">
                    <div id="prev" class="flex inline-flex">
                    </div>

                    <div id="next" class="flex inline-flex">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col grid grid-cols-1 s:mt-10 md2:mt-0 mb-20">
            <div class="flex flex-col ml-3 ml-auto mr-auto">
                <div class="flex flex-col ml-auto mr-auto">
                    <p class="text-white mb-5 font-medium">POKEMON CARDS</p>
                </div>
                <div id="cards" class="flex grid md2:grid-cols-4 lg2:grid-cols-5 gap-3 sm3:grid-cols-3 sm2:grid-cols-2 sm:grid-cols-1">
                </div>
            </div>
        </div>

        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-white text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-300  hover:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out hidden bottom-5 right-5 fixed" id="btn-back-to-top">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="black" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
            </svg>
        </button>
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
            }).fail(function(jqXHR) {
                if (jqXHR.status == 404) {
                    var all = document.getElementById('all');
                    all.style.display = "none";
                    var nav = document.getElementById('nav');
                    nav.style.display = "none";
                    var hidden = document.getElementById('hidden');
                    hidden.style.display = "block";

                } else {
                    var all = document.getElementById('all');
                    all.style.display = "none";
                    var nav = document.getElementById('nav');
                    nav.style.display = "none";
                }
            });

            await $.when(
                $.getJSON(url)
                , $.getJSON(species)
            ).done(function(result1, result2) {
                $.getJSON(result2[0].evolution_chain.url, data => {
                    let url1 = data.chain.species.url;
                    let id1 = url1.split('/')[6];
                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${id1}/`, data => {
                        evodiv = document.getElementById('1');
                        var divevo = document.createElement("div");
                        divevo.classList.add("evo");
                        var imgevo = document.createElement("img");
                        if (data.sprites.front_default) {
                            imgevo.src = data.sprites.front_default;
                        } else if (data.sprites.other.home.front_default) {
                            imgevo.src = data.sprites.other.home.front_default
                        } else if (data.sprites.other[data.sprites.other.length - 1]) {
                            imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${ids}.png`;
                        } else {
                            imgevo.src = "/img/404/sad.png"
                        }
                        var aTag = document.createElement('a');
                        aTag.setAttribute('href', '/' + id1);
                        evodiv.appendChild(divevo);
                        divevo.appendChild(aTag);
                        aTag.appendChild(imgevo);
                    });

                    if (data.chain.evolves_to.length > 0) {
                        let evo2 = data.chain.evolves_to;
                        evo2.forEach(element => {
                            let url2 = element.species.url;
                            let id2 = url2.split('/')[6];
                            $.getJSON(`https://pokeapi.co/api/v2/pokemon/${id2}/`, data => {
                                evodiv = document.getElementById('2');
                                var divevo = document.createElement("div");
                                divevo.classList.add("evo");
                                var imgevo = document.createElement("img");
                                if (data.sprites.front_default) {
                                    imgevo.src = data.sprites.front_default;
                                } else if (data.sprites.other.home.front_default) {
                                    imgevo.src = data.sprites.other.home.front_default
                                } else if (data.sprites.other[data.sprites.other.length - 1]) {
                                    imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${ids}.png`;
                                } else {
                                    imgevo.src = "/img/404/sad.png"
                                }
                                var aTag = document.createElement('a');
                                aTag.setAttribute('href', '/' + id2);
                                evodiv.appendChild(divevo);
                                divevo.appendChild(aTag);
                                aTag.appendChild(imgevo);
                            });
                        });

                        if (data.chain.evolves_to[0].evolves_to[0]) {
                            let evo3 = data.chain.evolves_to;
                            evo3.forEach(element => {
                                let evoevo3 = evo3[0].evolves_to;
                                evoevo3.forEach(element => {
                                    let url3 = element.species.url;
                                    let id3 = url3.split('/')[6];
                                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${id3}/`, data => {
                                        evodiv = document.getElementById('3');
                                        var divevo = document.createElement("div");
                                        divevo.classList.add("evo");
                                        var imgevo = document.createElement("img");
                                        if (data.sprites.front_default) {
                                            imgevo.src = data.sprites.front_default;
                                        } else if (data.sprites.other.home.front_default) {
                                            imgevo.src = data.sprites.other.home.front_default
                                        } else if (data.sprites.other[data.sprites.other.length - 1]) {
                                            imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${ids}.png`;
                                        } else {
                                            imgevo.src = "/img/404/sad.png"
                                        }
                                        var aTag = document.createElement('a');
                                        aTag.setAttribute('href', '/' + id3);
                                        evodiv.appendChild(divevo);
                                        divevo.appendChild(aTag);
                                        aTag.appendChild(imgevo);
                                    });
                                })
                            })
                        }
                    } else {
                        document.getElementById('2').style.display = "none";
                        document.getElementById('3').style.display = "none";
                    }

                    $.getJSON(species, data => {
                        let varieties = data.varieties;
                        if (varieties.length >= 2) {
                            var varietiessnipped = varieties.slice(1);
                            varietiessnipped.forEach(element => {
                                let urls = element.pokemon.url;
                                let ids = urls.split('/')[6];
                                $.getJSON(`https://pokeapi.co/api/v2/pokemon/${ids}/`, data => {
                                    if (!/totem/.test(data.name.replace(/-/g, ' '))) {
                                        evodiv = document.getElementById('special');
                                        var divevo = document.createElement("div");
                                        divevo.classList.add("evo");
                                        var imgevo = document.createElement("img");
                                        if (data.sprites.front_default) {
                                            imgevo.src = data.sprites.front_default;
                                        } else if (data.sprites.other.home.front_default) {
                                            imgevo.src = data.sprites.other.home.front_default
                                        } else if (data.sprites.other[data.sprites.other.length - 1]) {
                                            imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${ids}.png`;
                                        } else {
                                            imgevo.src = "/img/404/sad.png"
                                        }
                                        var aTag = document.createElement('a');
                                        aTag.setAttribute('href', '/' + ids);
                                        evodiv.appendChild(divevo);
                                        divevo.appendChild(aTag);
                                        aTag.appendChild(imgevo);
                                        document.getElementById('spectext').innerHTML = 'VARIETIES';
                                    }
                                });
                            });
                        } else {
                            document.getElementById('special').style.display = 'none';
                            document.getElementById('specialdiv').style.display = 'none';
                        }
                    });

                    if (result1[0].sprites.front_shiny) {
                        let shinyurl = result1[0].sprites.front_shiny;
                        shinydiv = document.getElementById('shiny');
                        var divshiny = document.createElement("div");
                        divshiny.classList.add("evo");
                        var imgshiny = document.createElement("img");
                        imgshiny.src = result1[0].sprites.front_shiny;
                        shinydiv.appendChild(divshiny);
                        divshiny.appendChild(imgshiny);
                        document.getElementById('shinytext').innerHTML = 'SHINY';
                    }

                    text = result1[0].name.replace(/-.*$/, "");
                    let cardurl = `https://api.pokemontcg.io/v2/cards?q=name:${text}`;
                    $.getJSON(cardurl, data => {
                        let test = data.data
                        test.forEach(element => {
                            carddiv = document.getElementById('cards');
                            var divcard = document.createElement("div");
                            var info = document.createElement("div");
                            var pcard = document.createElement("p");
                            divcard.classList.add("card");
                            info.classList.add("info");
                            var imgcard = document.createElement("img");
                            imgcard.src = element.images.small;
                            carddiv.appendChild(divcard);
                            divcard.appendChild(imgcard);
                            if (element.tcgplayer) {
                                if (element.tcgplayer.prices) {
                                    var price = "$" + element.tcgplayer.prices[Object.keys(element.tcgplayer.prices)[0]].market;
                                    var type = Object.keys(element.tcgplayer.prices)[0];
                                    pcard.innerHTML = type.charAt(0).toUpperCase() + type.slice(1) + ' - ';
                                    pcard.style.marginRight = "2px";
                                    var a = document.createElement('a');
                                    a.setAttribute('target', '_blank');
                                    a.href = element.tcgplayer.url;
                                    a.innerHTML = price;
                                    a.classList.add("carda");
                                    document.body.appendChild(a);
                                    info.appendChild(pcard);
                                    info.appendChild(a);
                                } else {
                                    pcard.innerHTML = 'This item has no current listings.';
                                    info.appendChild(pcard);
                                }
                            } else {
                                pcard.innerHTML = "Price Unavailable";
                                info.appendChild(pcard);
                            }
                            divcard.appendChild(info);

                        });
                    })

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

                    function randomIntFromInterval(min, max) { // min and max included 
                        return Math.floor(Math.random() * (max - min + 1) + min)
                    }
                    const rndInt = randomIntFromInterval(1, 898)

                    var aRandom = document.createElement('a');
                    aRandom.setAttribute('href', '/' + rndInt);
                    var left = document.getElementById('left');
                    var poke = document.createElement("img");
                    poke.src = "/img/loader/master.webp";
                    poke.classList.add("random");
                    left.appendChild(aRandom);
                    aRandom.appendChild(poke);


                    var request;
                    if (window.XMLHttpRequest)
                        request = new XMLHttpRequest();
                    else
                        request = new ActiveXObject("Microsoft.XMLHTTP");
                    request.open('GET', `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${result1[0].id}.png`, false);
                    request.send();
                    if (request.status === 404) {
                        if (result1[0].sprites.front_default) {
                            imggg = result1[0].sprites.front_default
                        } else if (result1[0].sprites.other.home.front_default) {
                            imggg = result1[0].sprites.other.home.front_default
                        } else {
                            imggg = "/img/404/sad.png"
                        }
                    } else {
                        imggg = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${result1[0].id}.png`;
                    }

                    document.getElementById('img').src = imggg;
                    document.getElementById('img').crossOrigin = "anonymous";
                    let name = result1[0].name.replace(/-/g, ' ');
                    document.getElementById('name').innerText = name[0].toUpperCase() + name.slice(1);
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

                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${result1[0].id - 1}/`, data => {
                        var prevdiv = document.getElementById('prev');
                        var divevo = document.createElement("div");
                        var arrowevo = document.createElement("img");
                        divevo.classList.add("evo");
                        var imgevo = document.createElement("img");
                        if (data.sprites.front_default) {
                            imgevo.src = data.sprites.front_default;
                        } else if (data.sprites.other.home.front_default) {
                            imgevo.src = data.sprites.other.home.front_default
                        } else if (data.sprites.other[data.sprites.other.length - 1]) {
                            imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${data.id}.png`;
                        } else {
                            imgevo.src = "/img/404/sad.png"
                        }
                        arrowevo.src = "img/arrowleft.svg";
                        arrowevo.classList.add("posleft");
                        var aTag = document.createElement('a');
                        aTag.classList.add("test");
                        aTag.setAttribute('href', '/' + data.id);
                        prevdiv.appendChild(divevo);
                        divevo.appendChild(aTag);
                        aTag.appendChild(arrowevo);
                        aTag.appendChild(imgevo);
                    })


                    $.getJSON(`https://pokeapi.co/api/v2/pokemon/${result1[0].id + 1}/`, data => {
                        var nextdiv = document.getElementById('next');
                        var divevo = document.createElement("div");
                        var arrowevo = document.createElement("img");
                        divevo.classList.add("evo");
                        var imgevo = document.createElement("img");
                        if (data.sprites.front_default) {
                            imgevo.src = data.sprites.front_default;
                        } else if (data.sprites.other.home.front_default) {
                            imgevo.src = data.sprites.other.home.front_default
                        } else if (data.sprites.other[data.sprites.other.length - 1]) {
                            imgevo.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${data.id}.png`;
                        } else {
                            imgevo.src = "/img/404/sad.png"
                        }
                        arrowevo.src = "img/arrowright.svg";
                        arrowevo.classList.add("posright");
                        var aTag = document.createElement('a');
                        aTag.classList.add("test");
                        aTag.setAttribute('href', '/' + data.id);
                        nextdiv.appendChild(divevo);
                        divevo.appendChild(aTag);
                        aTag.appendChild(imgevo);
                        aTag.appendChild(arrowevo);
                    });



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

                    const image = document.getElementById("img")
                    const src = image.getAttribute('src');
                    if (src == "null") {
                        document.body.style.background = "#222"
                    } else {
                        image.onload = () => {
                            const {
                                R
                                , G
                                , B
                            } = getAverageColor(image, 4)

                            document.body.style.background = `rgb(${R}, ${G},${B})`
                        }
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

        // Get the button
        let mybutton = document.getElementById('btn-back-to-top');

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = 'block';
            } else {
                mybutton.style.display = 'none';
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener('click', backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
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
