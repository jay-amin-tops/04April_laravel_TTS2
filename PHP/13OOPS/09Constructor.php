<?php


class Books{
    public function __construct(){
        echo "<br>Constructor Invoked By default when objects are created";
        echo "<br>Constructor never return";
        echo "<br>Constructor used for inti some value like Database connection";
    }
    public function __destruct(){
        echo "<br>__destruct Invoked By default after all function from the class at last";
        echo "<br>work as garbage collactor";
    }
    
    public static function TwoState(){
        // echo $this->ab;
        echo "<br>Romantic and social story of Two States <br>";
        // echo "Wrintten by ",$this->Author;
   }
}

// class Books{
//     public function __construct(){
//         $ab= "This is the varaible";
//         echo "<br>Story of ThereeIdiots comedy and inpiration<br>";
//         echo "Wrintten by ",$this->Author;
//     }
//     public static function TwoState(){
//         // echo $this->ab;
//         echo "<br>Romantic and social story of Two States <br>";
//         echo self::$Author;
//         // echo "Wrintten by ",$this->Author;
//    }
// }
// BooksOther::Data();
$object = new Books;
?>