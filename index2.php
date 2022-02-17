<?php include __DIR__ . "/database/data.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img src="img/Spotify_Logo_CMYK_Green.png" alt="">
    </div>
    <div id="app">
        <div class="big-box">
            <div class="disc-container">
                <div class="card" v-for="(disco, index) in dischi" :key="index">
                    <img :src="disco.poster" alt="">
                    <h3>result.data[index].title</h3> <!-- prove per capire se sbaglio qulacosa nella scrittura-->
                    <h5>{{result.data[0].title}}</h5> <!-- prove per capire se sbaglio qulacosa nella scrittura-->
                    <h5>{{disco.year}}</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    new Vue({
        el: "#app",
        data: {
            dischi: [],
        },
        mounted() {
            axios
                .get("http://localhost:8888/esercizi/php-ajax-dischi/api/dischi.php")
                .then((result) => {
                    this.dichi = result.data;
                    console.log(result.data[0].title)
                });
        },

    });
</script>