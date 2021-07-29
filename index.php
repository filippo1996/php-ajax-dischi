<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-auto">
                        <select v-model="selected" @change="filterDiscs($event)" v-cloak>
                            <option disabled value="">Seleziona genere</option>
                            <option v-for="option in options" v-bind:value="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                        <span v-cloak>Genere: {{ selected }}</span>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-3" v-for="disc in discs">
                        <div class="card h-100" style="width: 18rem;">
                            <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                            <div class="card-body">
                                <h5 class="card-title" v-cloak>{{disc.title}}</h5>
                                <p class="card-text" v-cloak>Autore: {{disc.author}}</p>
                                <p class="card-text" v-cloak>Genere: {{disc.genre}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- App JS -->
    <script src="js/app.js"></script>
</body>
</html>