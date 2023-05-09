<?php

echo "ECHO and PRINT only are responsible for the output from the server to the client"; 
echo "Testing"," Other data"; 
print "Testing"; 


$array = array("test",true,123,456.12,'A');
// echo $array ;
echo "<pre>";
// developer option for view array data START
print_r($array);
var_dump($array);
var_export($array);
echo "</pre>";
// developer option for view array data END
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

<h2>echo vs print</h2>
<p>echo is command </p>
<p>echo supports muliple arg </p>
<p>echo faster than print </p>
<p>print is function </p>
<p>print dnt supports muliple arg </p>
<p>print is slower then echo</p>
</body>
</html>