<?php
// comment => A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code. Comments can be used to: Let others understand your code. 

$username = "Madhav"; // correct;
$username12 = "value"; // correct
// $user name = "value" // wrong
// $@#$%^&*()user name = "value" // wrong
// $123user name = "value" // wrong
// echo "data";

// $a =  '50';


// if ($a == 50) {
// if ($a == 50) {
//     echo "inside if";
// } else {
//     echo "inside else";
//     # code...
// }
$marks = 75;
// if ($marks >= 50 ) {
//     echo "Pass";
// }
// if ($marks >= 50 ) {
//     echo "Pass";
// }else{
//     echo "else";
// }
// if ($marks >= 00 && $marks <=100) {
//     if ($marks >= 50 ) {
//         echo "Pass";
//     }else{
//         echo "else";
//     }
// }else{
//     echo "Invalid";
// }
if ($marks >= 00 && $marks <=100) {
    if ($marks >= 50 && $marks <60 ) {
        echo "Pass Class";
    }else if ($marks >= 60 && $marks <70 ) {
        echo "Second Class";
    }else if ($marks >= 70 || $marks <80 ) {
        echo "Disct Class";
    }else{
        echo "else";
    }
}else{
    echo "Invalid";
}

$day = "Mon";
switch ($day) {
    case 'Mon':
        echo "Monday";
        break;
    case 'Tue':
        echo "Tuesday";
        break;
    case 'Wed':
        echo "Wednesday";
        break;
    case 'Thu':
        echo "Thursday";
        break;
    
    default:
        # code...
        break;
}

