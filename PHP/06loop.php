<?php

// for ($i=0; $i < 10; $i++) {
//     echo "<br>$i";
// }
// for (init; condition; increment/decrement) {
//     body
// }
$a = 0;
while ($a <= 10) {
    echo "Inside while<br>";
    $a++;
}
$dowhile =  5;
// Exit Control  START
do {
    echo "inside do while<br>";
    $dowhile++;
} while ($dowhile <= 10);
// Exit Control END 


$arr = [12,475,"asdf",true];
foreach ($arr as $key => $value) {
    echo "Key is $key and value is $value<br>";
}
?>