<?php
/*creare un file index.php in cui:
    - è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)
*/




//definisco la classe movie
class movie{
    
    //dichiaro le variabili d'istanza
    public $titolo;
    public $anno;
    public $genere;
    public $durata;

    //definisco un costruttore
    function __construct($_titolo, $_anno, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    //definisco un metodo
    public function printMovieName(){
        return $this->titolo;
    }    
}

//istanziate gli oggi Movie
$ioSonoLeggenda = new Movie("Io sono Leggenda", 2007, "Horror", 101);
$spiderman = new Movie("Spiderman", 2014, "Fantasy/Action", 142);

//stampo a video i valori degli oggetti
echo "<br>nome film: " . $ioSonoLeggenda->printMovieName() . "<br>Durata: " . $ioSonoLeggenda->durationMovie();
echo "<br><br>nome film: " . $spiderman->printMovieName() . "<br>Durata: " . $spiderman->durationMovie();

?>