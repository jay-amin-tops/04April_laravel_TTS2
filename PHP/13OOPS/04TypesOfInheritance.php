<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inheritance</h2>
    <p>access parent properties to child</p>
<?php

use MathOperation as GlobalMathOperation;

    class MathOperation{
        function AdditionOfTwo($a,$b){
            return $a+$b;
        }
        function AdditionOfThree($a,$b,$c){
            return $a+$b+$c;
        }
        function AdditionOfTwoOrTheree($a,$b,$c=0){
            return $a+$b+$c;
        }
    }

    class AdvanceMath extends MathOperation{
        public function AverageOfThree($a,$b,$c){
            // $sum = $a+$b+$c;
            $sum = $a+$b+$c;
            return $sum/3;
        }
    }
    // class AdvanceMathOther extends AdvanceMath,MathOperation{
    // class AdvanceMathOther extends AdvanceMath extends MathOperation{
    class AdvanceMathOther extends AdvanceMath{
        public function percentage($z,$c,$j){
            // $sum = $a+$b+$c;
            $sum = $this->AverageOfThree($z,$c,$j);
            return $sum/3;
        }
    }
    $object = new AdvanceMathOther;
    echo $object->AdditionOfTwo(60,90);
    echo "<br>";
    echo $object->AdditionOfThree(60,90,80);
    echo "<br>";
    echo $object->AdditionOfTwoOrTheree(60,900);
    echo "<br> Addition of 60,90,80 is ";
    echo $object->AdditionOfTwoOrTheree(60,90,80);
    echo "<br>Average of 60,90,80 is ";
    echo $object->percentage(60,90,80);
    ?>
    <ol>
        <li>Single</li>
        <li>MultiLevel</li>
        <li>Multiple</li>
        <li>Hirarchical</li>
        <li>Hybride</li>
    </ol>
</body>
</html>