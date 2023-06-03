<?php

class DatabaseOperation{
    // public $Db = "Database Conection";
    // public $Db = new mysqli("localhost","","","masterdatabase"); // New expressions are not supported in this context in
    public $Db = "";
    public function __construct() {
        // $this->Db =new mysqli("localhost","root","","masterdatabase"); 
        // $this->Db =mysqli_connect("localhost","root","","masterdatabase"); 
    }
    public function __destruct() {
        $this->Db ="";
        unset($this->Db); 
    }
    public function insert(){
        echo "Insert";
        $this->Db;
    }
    public function update(){
        echo "update";
        $this->Db;
    }
    public function delete(){
        echo "delete";
        $this->Db;
    }
}
$DatabaseOperation =new DatabaseOperation;
$DatabaseOperation->insert();
?>