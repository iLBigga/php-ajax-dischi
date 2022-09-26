<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Dischi</title>
</head>

<body>

    <?php

    include __DIR__ . '/../db/albums.php';


    ?>


    <header class="p-4 d-flex justify-content-between">
        <img class="logo_spotify" src="../assets/Spotify_logo_without_text.svg.png" alt="">
    </header>

    <main class="main-section py-5">
        <div class="container-xl">
            <div class="row row-cols-lg-5 g-2">
                <?php
                foreach($albums as $album) {
                ?>
                        <div class="custom_card p-2">
                            <img src="<?= $album['poster'] ?>">
                            <div class="card_body py-3">
                                <p class="title"><?= $album['title'] ?></p>
                                <div class="card_author">
                                    <div class="author"><?= $album['author'] ?></div>
                                    <div class="year"><?= $album['year'] ?></div>
                                </div>
                            </div>
                        </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>




</body>

</html>