<?php

class Books{

    public static $Author= "Chectan Bhagat";
    public function ThereeIdiots(){
        $ab= "This is the varaible";
        echo "<br>Story of ThereeIdiots comedy and inpiration<br>";
        echo "Wrintten by ",$this->Author;
    }
    public static function TwoState(){
        // echo $this->ab;
        echo "<br>Romantic and social story of Two States <br>";
        echo self::$Author;
        // echo "Wrintten by ",$this->Author;
   }
}
class BooksOther extends Books{

    public static function Data(){
        // echo $this->ab;
        echo "<br>Romantic and social story of Two States Other <br>";
        echo parent::$Author;
        // echo "Wrintten by ",$this->Author;
   }
}


BooksOther::Data();
?>