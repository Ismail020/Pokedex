<x-layout>
    <div class="flex justify-center flex-col">
        <nav x-cloak x-data="{ open: false }" class="z-50 mt-10">
            <div class="flex items-center justify-start h-16 -mt-[148px] fixed">
                <div class="ml-2 flex sm3:hidden">
                    <!-- Mobile menu button -->
                    <button x-on:click="open = ! open" type="button" class="inline-flex items-center justify-center p-2 rounded-md bg-gray-800 text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <div x-show="open" x-transition @click.away="open = false" class=" bg-gray-800 sm3:hidden fixed ml-2 -mt-[93px]  rounded-md" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <div x-data="{ open: false }" class="relative text-left mr-5 z-30 ">
                        <button x-on:click="open = ! open" class="inline-flex justify-center text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Types
                            <svg class="-mr-1 ml-2 mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition @click.away="open = false" class="origin-top-right absolute left-0 mt-2 w-40  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <button id="fire" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fire')" x-on:click="open = false" id="menu-item-8">Fire</button>
                                <button id="grass" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('grass')" x-on:click="open = false" id="menu-item-8">Grass</button>
                                <button id="water" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('water')" x-on:click="open = false" id="menu-item-8">Water</button>
                                <button id="bug" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('bug')" x-on:click="open = false" id="menu-item-8">Bug</button>
                                <button id="normal" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('normal')" x-on:click="open = false" id="menu-item-8">Normal</button>
                                <button id="electric" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('electric')" x-on:click="open = false" id="menu-item-8">Electric</button>
                                <button id="ice" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ice')" x-on:click="open = false" id="menu-item-8">Ice</button>
                                <button id="fighting" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fighting')" x-on:click="open = false" id="menu-item-8">Fighting</button>
                                <button id="poison" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('poison')" x-on:click="open = false" id="menu-item-8">Poison</button>
                                <button id="ground" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ground')" x-on:click="open = false" id="menu-item-8">Ground</button>
                                <button id="flying" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('flying')" x-on:click="open = false" id="menu-item-8">Flying</button>
                                <button id="psychic" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('psychic')" x-on:click="open = false" id="menu-item-8">Psychic</button>
                                <button id="rock" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('rock')" x-on:click="open = false" id="menu-item-8">Rock</button>
                                <button id="ghost" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ghost')" x-on:click="open = false" id="menu-item-8">Ghost</button>
                                <button id="dark" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('dark')" x-on:click="open = false" id="menu-item-8">Dark</button>
                                <button id="dragon" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('dragon')" x-on:click="open = false" id="menu-item-8">Dragon</button>
                                <button id="steel" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('steel')" x-on:click="open = false" id="menu-item-8">Steel</button>
                                <button id="fairy" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fairy')" x-on:click="open = false" id="menu-item-8">Fairy</button>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="relative inline-block text-left mr-5 z-20">
                        <div>
                            <button x-on:click="open = ! open" class="inline-flex justify-center text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Generations
                                <svg class="-mr-1 ml-2 h-5 w-5 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="open" x-transition @click.away="open = false" class="origin-top-right absolute left-0 mt-2 w-40  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
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
                    <div class="ml-1">
                        <button id="filter2" class="hidden inline-flex justify-center text-gray-300 hover:text-white block px-1 py-1 rounded-md text-base font-medium" onclick="test('zero')">
                            <div class="flex flex-row justify-center bg-gray-900 rounded-md px-3 py-2">
                                <p id="filtertype2"></p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-[3px] text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div>
                        <form class="randomm1 left-0 mt-1">
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
                                <input list="pokemon" type="search" class="inline-flex justify-center ml-2 mt-1 text-gray-700 block px-2 py-2 rounded-md text-base font-medium" id="exampleSearch" placeholder="Search..." />
                                <datalist id="pokemon">
                                    <template x-for="name in allnames">
                                        <option x-bind:value="name.name">
                                    </template>
                                </datalist>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="max-w-7xl s:mx-auto sm:px-6 lg:px-8">
            <div id="nav">
                <div class="s:hidden sm3:block">
                    <div class="flex sm3:flex-row inline-flex nav">
                        <div>
                            <button id="filter" class="hidden inline-flex justify-center w-min mr-5 rounded-md border border-white rounded-3xl shadow-lg px-4 py-2 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:outline-none" onclick="test('zero')">
                                <div class="flex flex-row justify-center">
                                    <p id="filtertype"></p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </button>
                        </div>

                        <div x-data="{ open: false }" class="relative inline-block text-left mr-5 z-50 ">
                            <div>
                                <button x-on:click="open = ! open" class="inline-flex justify-center rounded-md border border-white rounded-3xl shadow-lg px-4 py-2 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Types
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-transition @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-40  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <button id="fire" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fire')" x-on:click="open = false" id="menu-item-8">Fire</button>
                                    <button id="grass" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('grass')" x-on:click="open = false" id="menu-item-8">Grass</button>
                                    <button id="water" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('water')" x-on:click="open = false" id="menu-item-8">Water</button>
                                    <button id="bug" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('bug')" x-on:click="open = false" id="menu-item-8">Bug</button>
                                    <button id="normal" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('normal')" x-on:click="open = false" id="menu-item-8">Normal</button>
                                    <button id="electric" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('electric')" x-on:click="open = false" id="menu-item-8">Electric</button>
                                    <button id="ice" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ice')" x-on:click="open = false" id="menu-item-8">Ice</button>
                                    <button id="fighting" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fighting')" x-on:click="open = false" id="menu-item-8">Fighting</button>
                                    <button id="poison" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('poison')" x-on:click="open = false" id="menu-item-8">Poison</button>
                                    <button id="ground" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ground')" x-on:click="open = false" id="menu-item-8">Ground</button>
                                    <button id="flying" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('flying')" x-on:click="open = false" id="menu-item-8">Flying</button>
                                    <button id="psychic" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('psychic')" x-on:click="open = false" id="menu-item-8">Psychic</button>
                                    <button id="rock" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('rock')" x-on:click="open = false" id="menu-item-8">Rock</button>
                                    <button id="ghost" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('ghost')" x-on:click="open = false" id="menu-item-8">Ghost</button>
                                    <button id="dark" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('dark')" x-on:click="open = false" id="menu-item-8">Dark</button>
                                    <button id="dragon" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('dragon')" x-on:click="open = false" id="menu-item-8">Dragon</button>
                                    <button id="steel" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('steel')" x-on:click="open = false" id="menu-item-8">Steel</button>
                                    <button id="fairy" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" onclick="test('fairy')" x-on:click="open = false" id="menu-item-8">Fairy</button>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="relative inline-block text-left mr-5 z-50 ">
                            <div>
                                <button x-on:click="open = ! open" class="inline-flex justify-center rounded-md border border-white rounded-3xl shadow-lg px-4 py-2 bg-white text-sm font-medium text-gray-400 hover:bg-gray-50 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Generations
                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-transition @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-40  rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
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
            </div>
            <div id="poke_container" class="flex grid md2:grid-cols-4 lg2:grid-cols-5 gap-3 sm3:grid-cols-3 sm2:grid-cols-2 s:grid-cols-2 s:justify-center">

            </div>
        </div>
        <div id="buttonmore" class="mb-32 mt-16 mx-auto">
            <div class="grid gap-8 items-start justify-center">
                <div class="relative group">
                    <button id="more" class="relative px-7 py-4 bg-white rounded-lg shadow-lg leading-none flex items-center divide-x hover:bg-gray-300 hover:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="text-black">Load more</span>
                    </button>
                </div>
            </div>
        </div>

        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-white text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-300  hover:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out hidden bottom-5 right-5 fixed" id="btn-back-to-top">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="black" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
            </svg>
        </button>
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
            var filter = document.getElementById('filter');
            var filtertype = document.getElementById('filtertype');
            var filter2 = document.getElementById('filter2');
            var filtertype2 = document.getElementById('filtertype2');
            filter.style.display = "block";
            filtertype.innerHTML = y;
            filter2.style.display = "block";
            filtertype2.innerHTML = y;
            document.getElementById("buttonmore").style.display = "none";
            document.getElementById("poke_container").style.marginBottom = "128px";
            var value = document.getElementById(y);
            limit = value.getAttribute("data-value");
            offset = value.value;
            removeChildNodes(poke_container);
            check = true;
            fetchPokemonss();
        }

        function test(x) {
            var filter = document.getElementById('filter');
            var filtertype = document.getElementById('filtertype');
            var filter2 = document.getElementById('filter2');
            var filtertype2 = document.getElementById('filtertype2');
            if (x == 'zero') {
                document.getElementById("poke_container").style.marginBottom = "0px";
                document.getElementById("buttonmore").style.display = "block";
                removeChildNodes(poke_container);
                limit = 29;
                offset = 1;
                fetchPokemons();
                filter.style.display = "none";
                filter2.style.display = "none";
            } else {
                filter.style.display = "block";
                filtertype.innerHTML = x;
                filter2.style.display = "block";
                filtertype2.innerHTML = x;
                document.getElementById("buttonmore").style.display = "none";
                document.getElementById("poke_container").style.marginBottom = "128px";
                urltype = `https://pokeapi.co/api/v2/type/${x}`;
                $.getJSON(urltype, data => {
                    removeChildNodes(poke_container);
                    let test = data.pokemon;
                    test.forEach(element => {
                        $.getJSON(element.pokemon.url, data => {
                            let nameee = data.name.replace(/-/g, ' ');
                            if (!/totem/.test(nameee)) {
                                if (data.sprites.other.home.front_default) {
                                    const pokemon = data;
                                    createPokemonCard(pokemon);
                                }
                            }
                        })
                    });
                })
            }
        }

        var check = false;


        function removeChildNodes(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }

        let limit = 29;
        let offset = 1;

        more.addEventListener("click", () => {
            offset += 30;
            fetchPokemons(offset, limit);
        });

        const fetchPokemons = async () => {
            for (let i = offset; i <= offset + limit; i++) {
                await getPokemon(i);
                if (offset == 881) {
                    document.getElementById("buttonmore").style.display = "none";
                    document.getElementById("poke_container").style.marginBottom = "128px";
                }
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

            function createTypes(types, poketypes) {
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
                poketypes.append(type1)

                if (types[1]) {
                    const type2 = document.createElement('p');
                    type2.classList.add("typecolorall2");
                    typecolor(1, type2);
                    poketypes.append(type2)
                }

            }

            const pokeInnerHTML = `
            <a href="/${pokemon.id}">
                <div class="bg-white mt-24 border-none rounded-2xl shadow-lg w-52 s:w-36 sm2:w-52 h-36 ">
                    <div class="img-container p-6">
                        <div>
                            <img class="rounded -mt-24 mx-auto w-24 " src="${pokemon.sprites.other.home.front_default}" />
                        </div>
                    </div>
                    <div class="flex flex-col truncate">
                        <span class="text-gray-500 text-sm mx-auto">N°${pokemon.id.toString().padStart(3, '0')}</span>
                        <h3 id="test" class="font-medium text-lg mx-auto mt-1">${name.replace(/-/g, ' ')}</h3>
                    </div>
                </div>
            </a>
            `;

            pokemonEl.innerHTML = pokeInnerHTML;

            poke_container.appendChild(pokemonEl);
            pokemonEl.appendChild(pokeTypes);
        }

        fetchPokemons();

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
