<?php include __DIR__ . "/database/data.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img src="img/Spotify_Logo_CMYK_Green.png" alt="">
    </div>
    <div id="app">

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
                    console.log(result)
                });
        },

    });
</script>