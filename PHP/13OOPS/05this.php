<?php

class ABC{
    public function Testing(){
        echo "something";
    }
    public function Checking(){
        $this->Testing();
        echo "<br>data";
   }
}


$objectOf = new ABC;
$objectOf->Checking();
?>