<!-- create un file index.php in cui:

- è definita una classe ‘Movie’ 
    => all'interno della classe sono dichiarate delle variabili d'istanza; 
    => all'interno della classe è definito un costruttore; 
    => all'interno della classe è definito almeno un metodo;

- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
// ini_set('display_errors' , 1 );
// error_reporting( E_ALL );

class Movie {

    public $title;
    public $genre;
    public $year; 
    public $oscar; 


       
    function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;        

    }

    public function setOscar($oscar){        
        $this->oscar = $oscar;        
    }

    public function getOscar(){
        return $this->oscar;
    }

}

    $matrix = new Movie("Matrix", "Azione", "07/05/1999");
    $matrix->setOscar(2);

    // echo "Il film ha avuto ".$matrix->getOscar() . "oscar";
    var_dump($matrix);

    
    $the_imitation_game = new Movie("The imitation game", "Dramma", "29/08/2014");
    $the_imitation_game->setOscar(5);
    var_dump($the_imitation_game);

    

?>

