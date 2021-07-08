<!-- Ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    include_once __DIR__ . "/script/movie.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
    <main class="py-5">
        <div class="container d-flex">
            <div class="w-25 p-3 d-flex flex-column  text-center">
                <img src="<?= $movie1->getImg();?>" alt="The Petrified Forest"> 
                <h2><?= $movie1->title; ?></h2>
                <small><?= $movie1 ->releaseDate;?></small>
                <h4 class="mt-2">Description</h4>
                <p><?= $movie1->getExcerpt();?></p>
                
            </div> 
            <div class="w-25 p-3 d-flex flex-column  text-center">
                <img src="<?= $movie2->getImg();?>"  alt="The Emerald Forest">
                <h2><?= $movie2->title; ?></h2>
                <small><?= $movie2->releaseDate;?></small>
                <h4 class="mt-2">Description</h4>
                <p><?= $movie2->getExcerpt();?></p>
            </div> 
            <div class="w-25 p-3 d-flex flex-column  text-center">
                <img src="<?= $movie3->getImg();?>"  alt="Into the Forest">
                <h2><?= $movie3->title; ?></h2>
                <small><?= $movie3->releaseDate;?></small>
                <h4 class="mt-2">Description</h4>
                <p><?= $movie3->getExcerpt();?></p>
            </div> 
            <div class="w-25 p-3 d-flex flex-column  text-center">
                <img src="<?= $movie4->getImg();?>"  alt="Forest Warrior">
                <h2><?= $movie4->title; ?></h2>
                <small><?= $movie4->releaseDate;?></small>
                <h4 class="mt-2">Description</h4>
                <p><?= $movie4->getExcerpt();?></p>
            </div> 
        </div>
    </main>
</body>
</html>