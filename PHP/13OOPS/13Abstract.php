<?php


abstract class RBI{
    public static function FunctionName(){
        echo "Called";
    }
    public function FunctionNameSimpleMethod(){
        echo "Called";
    }
    abstract public function GiveInterest();
    abstract public function GiveInterest2();
}

class SBI extends RBI{
    public static function ChildFunctionName(){
        echo "Called";
        // $this->FunctionNameSimple(); //Using $this when not in object context in
    }
    
    public function GiveInterest(){
        
    }
    public function GiveInterest2(){
        
    }
    public function FunctionNameAbsMethod(){
        echo "called";
    }
}
// we cant create an object of abstrated Class
// abstrated Class only able to contain abstacted method
// $testClass = new testClass; rule 1 :we cnt create an object of abs class
// testClass::FunctionName();
$ChildClass = new SBI;
$ChildClass->ChildFunctionName()
?>
