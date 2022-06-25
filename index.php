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
    public function durationMovie(){
        $hour = 0;
        $minutes = $this->duarata;

        $hour = $this->duarata / 60;
        
        if($hour > 0){
            $minutes  = $this->duarata - ($hours * 60);
            return $this->durata = $hour + ':'  + $minutes;
        }
        else{
            return $this->durata;
        }
    }

    public function printMovieName(){
        return $this->titolo;
    }    
}

//instanziate gli oggi Movie
$ioSonoLeggenda = new Movie("Io sono Leggenda", 2007, "Horror", 101);
$spiderman = new Movie("Spiderman", 2014, "Fantasy/Action", 142);



?>