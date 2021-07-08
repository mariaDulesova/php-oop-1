<?php
include __DIR__ . "/database.php";

    class Movie {
        //ATTRIBUTI/PROPRIETA'
        public $title;
        public $overview;
        public $language;
        public $releaseDate;
        public $url;

        //COSTRUTTORE
        function __construct($title, $overview, $language, $releaseDate, $url) {
            $this->title = $title;
            $this->overview = $overview;
            $this->language = $language;
            $this->releaseDate = $releaseDate;
            $this->url = $url;
        }

        //METODI
        public function getExcerpt(){
            return substr($this->overview, 0, 100)."...";
        }
        public function getImg() {
            return "https://image.tmdb.org/t/p/w185" . $this->url;
        }

    } 

    $movie1 = new Movie("The Petrified Forest", $overview1, "English", "1936-02-08", "/fU5rj72flMFCwTKUkIwbfUgvYBx.jpg");
    $movie2 = new Movie("The Emerald Forest", $overview2, "English", "1985-06-22","/yRTcrEdTGQOSjy1Gf84ivUe6VY7.jpg" );
    $movie3 = new Movie("Into the Forest", $overview3, "English", "2016-06-03", "/8sedxbHoP13xEbzCtdXsWpyQv2y.jpg");
    $movie4 = new Movie ("Forest Warrior", $overview4, "English", "1996-11-05", "/lU9ECdGWnhWl2pJKlovMSWQKmLB.jpg");
?>