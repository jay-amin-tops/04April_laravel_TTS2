<?php

$MadhavMaths = 98;
$MadhavENG = 90;
$MadhavGuj = 90;
$MadhavCom = 100;

// index array (numeric keys)
$MadhavMarks = [98, 90, 90, 100];
// for ($i=0; $i < count($MadhavMarks); $i++) { 
//     echo $MadhavMarks[$i];
// }
// exit;
echo "<pre>";
print_r($MadhavMarks);

$MadhavMarksArr = array(98, 90, 90, 100);
print_r($MadhavMarksArr);
// Associative array (keys will be alpha numeric user definded value)
$MadhavMarksArrAssoc = array("MATHS" => 98, "ENG" => 90, "GUJ" => 90, "COMP" => 100);
print_r($MadhavMarksArrAssoc);


$MultiD = array("10th" => array("Madhav" => array("MATHS" => 98, "ENG" => 90, "GUJ" => 90, "COMP" => 100), "Balram" => array("MATHS" => 100, "ENG" => 95, "GUJ" => 98, "COMP" => 100)));
print_r($MultiD);
print_r($MultiD["10th"]['Balram']['MATHS']);
echo $MultiD["10th"]['Balram']['MATHS'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li> array()</li>
        <li> is_array()</li>
        <li> in_array()</li>
        <li> array_merge()</li>
        <li> array_keys()</li>
        <li> array_key_exists()</li>
        <li> array_shift()</li>
        <li> array_push()</li>
        <li> array_pop()</li>
        <li> array_values()</li>
        <li> array_map()</li>
        <li> array_unique()</li>
        <li> array_slice()</li>
        <li> array_diff()</li>
        <li> array_search()</li>
        <li> array_reverse()</li>
        <li> array_unshift()</li>
    </ul>
</body>

</html>