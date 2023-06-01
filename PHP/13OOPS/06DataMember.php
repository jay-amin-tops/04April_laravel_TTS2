<?php

class Books{

    public $Author= "Chectan Bhagat";
    public function ThereeIdiots(){
        $ab= "This is the varaible";
        echo "<br>Story of ThereeIdiots comedy and inpiration<br>";
        echo "Wrintten by ",$this->Author;
    }
    public function TwoState(){
        // echo $this->ab;
        echo "<br>Romantic and social story of Two States <br>";
        echo "Wrintten by ",$this->Author;
   }
}


$objectOf = new Books;
$objectOf->TwoState();
?>