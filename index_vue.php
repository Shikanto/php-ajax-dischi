<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <title>PHP AJAX DISCHI</title>
</head>
<body>
    <main id="vueContainer">   
        <header class="header-container">
        <img class="logo" src="./style/spoty-logo.png" alt="">
        </header>
        <div class="main-container">
            <div class="container">
                <div class="container-disc">
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <div class="col" v-for="(album,i) in listAlbum" :key="i">
                            <div class="card">
                                <img class="card-img-top" :src="album.poster" alt="">
                                <div class="card-body">
                                    <h1 class="card-title text-center ">{{album.title.toUpperCase()}}</h1>
                                    <div class="card-text text-center">
                                        <h5>{{album.author}}</h5>
                                        <h5>{{album.year}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    <script src="mainVue.js"></script>
</body>
</html>