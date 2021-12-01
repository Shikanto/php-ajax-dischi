<?php

function createCardAlbum($album){
    if(!isset($album)){
        return;
    };

    $albumTitle = $album['title'];
    $albumAuthor = $album['author'];
    $albumPoster = $album['poster'];
    $albumGenre = $album['genre'];
    $albumYear = $album['year'];

    //var_dump($albumAuthor)

?>
<div class="col">
    <div class="card">
        <img class="card-img-top" src="<?php echo $albumPoster ?>" alt="<?php echo $albumGenre ?>">
        <div class="card-body">
            <h1 class="card-title text-center "><?php echo strtoupper($albumTitle) ?></h1>
            <div class="card-text text-center">
                <h5><?php echo strtoupper($albumAuthor) ?></h5>
                <h5><?php echo strtoupper($albumYear) ?></h5>
            </div>
        </div>
    </div>
</div>
<?php
};
?>