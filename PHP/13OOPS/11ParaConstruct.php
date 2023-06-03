<?php


class ExampleOfConstSecondClass{
    public $Db = "";
    public function __construct($dbname) {
       $this->Db =mysqli_connect("localhost","root","",$dbname); 
    }
}
$ExampleOfConst = new ExampleOfConstSecondClass('DB1');
$ExampleOfConst = new ExampleOfConstSecondClass('DB2');
$ExampleOfConst = new ExampleOfConstSecondClass('DB3');
$ExampleOfConst = new ExampleOfConstSecondClass('Something else');

?>