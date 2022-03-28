<x-layout>
    <h2>Search Pictures!</h2>
    <div x-data="{
                query: '',
                url: '',
                random: '',
                img: '',
    
                getImage () {
                    this.url = `https://api.unsplash.com/search/photos?query=${this.query}&client_id=5WnlFMrmjQeDPOHduyRcnalm0J1ggzOR6OdswEt7m0o`

                    $.getJSON(this.url, data => {
                        this.random = Math.floor(Math.random() * data.results.length);
                        this.img = data.results[this.random].urls.regular;
                    });
                }
            }">

        <div x-data="{ progress: 0 }">
            <form x-on:submit.prevent="getImage">
                <input type="text" x-model="query">
                <button type="submit" x-bind:disabled=" query === '' " @click="progress = 100">Search</button>
            </form>
            <progress max="100" x-bind:value="progress" /></progress>

            </progress>
        </div>

        <img :src="img" alt="" style="width: 300px">
    </div>

    <h2>Search Pokemon!</h2>
    <div x-data="{
            query: '',
            url: '',
            img: '',

            cardurl: '',
            cardimg: [],

            allurl: '',
            allnames: '',

            getImage () {
                this.url = `https://pokeapi.co/api/v2/pokemon/${this.query}/`

                $.getJSON(this.url, data => {
                    if (data.sprites.other.home.front_default === null) {
                        this.img = data.sprites.front_default;
                    } else {
                        this.img = data.sprites.other.home.front_default;
                    }
                });

                this.cardurl = `https://api.pokemontcg.io/v2/cards?q=name:${this.query}`

                $.getJSON(this.cardurl, data => {
                    this.cardimg = data.data;
                    console.log(this.cardimg)
                    {{-- console.log(this.cardimg.data[1].images.small) --}}
                    console.log(this.cardurl)
                });

            },

            init () {
                this.allurl = `https://pokeapi.co/api/v2/pokemon/?limit=1126`

                $.getJSON(this.allurl, data => {
                    this.allnames = data.results;
                });
            }
        }">

        <div x-data="{ progress: 0 }">
            <form x-on:submit.prevent="getImage">
                <input list="pokemon" x-model="query">
                <datalist id="pokemon">
                    <template x-for="name in allnames">
                        <option x-bind:value="name.name">
                    </template>
                </datalist>

                <button type="submit" x-bind:disabled=" query === '' " @click="progress = 100">Search</button>
            </form>
            <progress max="100" x-bind:value="progress" />
        </div>

        <h4>Pokemon:</h4>
        <img :src="img" alt="" style="width: 300px">

        <h4>All cards:</h4>
        <template x-for="cards in cardimg" :key="cards.id">
            <img :src="cards.images.small" alt="" style="width: 300px">
        </template>
    </div>
</x-layout>
