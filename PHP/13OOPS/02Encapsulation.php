<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Encapsulation</h2>
    <p>Wrapping the data into a single unit its done throgh class</p>
    <p>class is an example of encapsulation</p>
    <p>in php we can create class using <b>class</b> keyword</p>
    <p>without instance/object of class we cnt access properties of that class</p>
    <p>object means the key for access class elements in php we can create an object using <b>new</b> keyword.</p>
    <pre>
    class MathOperation{
        function AdditionOfTwo($a,$b)
        {
            return $a+$b;
        }
    }
    $object = new MathOperation;
    echo $object->AdditionOfTwo(60,90);
    </pre>
    <?php
    
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
    $object = new MathOperation;
    echo $object->AdditionOfTwo(60,90);
    echo "<br>";
    echo $object->AdditionOfThree(60,90,80);
    echo "<br>";
    echo $object->AdditionOfTwoOrTheree(60,900);
    echo "<br>";
    echo $object->AdditionOfTwoOrTheree(60,90,80);
    ?>
</body>

</html>