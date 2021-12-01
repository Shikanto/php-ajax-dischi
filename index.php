<?php
require_once __DIR__ . "/data/albums.php";
require_once __DIR__ . "/componets/cardAlbum.php"
//var_dump($albums)

?>

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
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>PHP AJaX DISCHI</title>
</head>
<body>
    
    <header class="header-container">
      <img class="logo" src="./style/spoty-logo.png" alt="">
    </header>
    <div class="main-container">
      <div class="container">
        <div class="container-disc">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php
                    foreach ($albums as  $album) {
                        //var_dump($album);
                        createCardAlbum($album);
                    };
                ?>
            </div>
    </div>
      </div>
    </div>
    <script src="main.js"></script>
</body>
</html>