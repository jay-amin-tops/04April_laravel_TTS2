<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>OOPS</h2>
    <p>Object Orienter Programming structure/system</p>
    <p>basically oops stands on 4 pillars</p>
    <ol>
        <li>Encapsulation</li>
        <li>Inheritance</li>
        <li>Polymorphism</li>
        <li>Abstaction</li>
    </ol>

    <h3>Why</h3>
    <p>Code reusablity => class, function</p>
    <p>Easy to understand and maintain</p>
    <p>for larg application code needs to be clear and structurised which will be fullfilled with OOPS concepts</p>
    <?php

// function(){ block of code for recall some code with specific task }

// function addition(){
//     echo 505+60;
// }

// addition();
// echo"<br>";
// addition();
// echo"<br>";
// addition();
// echo"<br>";
// addition();
// simple user definded function START
function bdaycele()
{
    echo "bday function";
}
// simple user definded function END

// Dynamic Parameterised function START
function mrg($bridal, $grm)
{ // parameters / receiver
    // echo "anushka and kohli mrg function";
    echo "$bridal and $grm mrg function";
}
// Dynamic Parameterised function END


// Dynamic Parameterised calling START
mrg("anushka", "Kohli"); // argument 
echo "<br>";
mrg("Jay", "Jenny");
echo "<br>";
mrg("abc", "xyz");
echo "<br>";
// Dynamic Parameterised calling END
?>
</body>
</html>