<!-- Ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    $body1 = "Gabby, the waitress in an isolated Arizona diner, dreams of a bigger and better life. One day penniless intellectual Alan drifts into the joint and the two strike up a rapport. Soon enough, notorious killer Duke Mantee takes the diner's inhabitants hostage. Surrounded by miles of desert, the patrons and staff are forced to sit tight with Mantee and his gang overnight.";
    $body2 ="For ten years, engineer Bill Markham has searched tirelessly for his son Tommy who disappeared from the edge of the Brazilian rainforest. Miraculously, he finds the boy living among the reclusive Amazon tribe who adopted him. And that's when Bill's adventure truly begins. For his son is now a grown tribesman who moves skillfully through this beautiful-but-dangerous terrain, fearful only of those who would exploit it. And as Bill attempts to \"rescue\" him from the savagery of the untamed jungle, Tommy challenges Bill's idea of true civilization and his notions about who needs rescuing.";
    $body3= "In the not too distant future, two young women who live in a remote ancient forest discover the world around them is on the brink of an apocalypse. Informed only by rumor, they fight intruders, disease, loneliness &amp; starvation.";

    class Movie {
        //ATTRIBUTI/PROPRIETA'
        public $title;
        public $overview;
        public $language;
        public $releaseDate;

        //COSTRUTTORE
        function __construct($title, $overview, $language, $releaseDate) {
            $this->title = $title;
            $this->overview = $overview;
            $this->language = $language;
            $this->releaseDate = $releaseDate;

        }

        //METODI
        public function getExcerpt(){
            return substr($this->body, 0, 100)."...";
        }


    } 


    $movie1 = new Movie("The Petrified Forest", $body1, "English", "1936-02-08");
    var_dump($movie1);

    $movie2 = new Movie("The Emerald Forest", $body2, "English", "1985-06-22");
    var_dump($movie2);

    $movie3 = new Movie("Into the Forest", $body3, "English", "2016-06-03");
    var_dump($movie3);
?>
