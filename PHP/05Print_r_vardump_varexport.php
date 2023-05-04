<?php

$arr = ["Data","something",'A',123,12.151,true];
echo "<pre>";
echo "<br> ========== print_r() ========== <br>";
print_r($arr);
echo "<br> ========== var_dump() ========== <br>";
var_dump($arr);
echo "<br> ========== var_export() ========== <br>";
var_export($arr);
echo "</pre>";
?>