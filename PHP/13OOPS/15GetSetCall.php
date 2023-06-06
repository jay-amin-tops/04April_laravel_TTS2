<?php

class MethodOverLoadingOverRidding{
    public $DataMember = "Something";
    public function FunctionName(){
        echo "Called";
    }
    // public function FunctionName(){ //Cannot redeclare MethodOverLoadingOverRidding::FunctionName() in
    //     echo "Called";
    // }
    // public function FunctionName($name){ //Cannot redeclare MethodOverLoadingOverRidding::FunctionName() in
    //     echo "Called";
    // }

    public function __get($data){
        echo $data;
    }
    public function __set($key,$val){
        echo $key,$val;
        # code...
    }
    public function __call($method,$array_data){
        // print_r($method);
        // print_r($array_data);
        if ($method =="insert") {
            echo "<pre>";
            // print_r($array_data);
            $tbl = $array_data[0];
            array_shift($array_data);
            $vals = $array_data;
            $val = implode("','",$vals);
            echo "</pre>";
            echo "INSERT INTO $tbl VALUES('$val')";

        }
    }

}
// class ChildCass extends MethodOverLoadingOverRidding{
//     public function FunctionName(){
//         echo "Called child";
//     }
//     // public function FunctionName(){ //Cannot redeclare MethodOverLoadingOverRidding::FunctionName() in
//     //     echo "Called";
//     // }
//     // public function FunctionName($name){ //Cannot redeclare MethodOverLoadingOverRidding::FunctionName() in
//     //     echo "Called";
//     // }
// }


$MethodOverLoadingOverRidding = new MethodOverLoadingOverRidding;
$MethodOverLoadingOverRidding->FunctionName();
echo "<br>";
echo $MethodOverLoadingOverRidding->DataMember;
echo "<br>";
echo $MethodOverLoadingOverRidding->Checking;
echo "<br>";
$MethodOverLoadingOverRidding->UserName = "Something";
echo "<br>";
$MethodOverLoadingOverRidding->insert("users","checking","something");
echo "<br>";
$MethodOverLoadingOverRidding->insert("city","Ahmedabad");
echo "<br>";
$MethodOverLoadingOverRidding->insert("state","stateTitle","title");
echo "<br>";
$MethodOverLoadingOverRidding->update("123","checking45");

?>