<?php
for ($i=0; $i <10 ; $i++) {
    // echo $i;
    for ($j=0; $j <=$i ; $j++){
        echo " * ";
    } 
    echo "<br>";
}
echo "<br>";
for ($i=10; $i >=0 ; $i--) {
    // echo $i;
    for ($j=0; $j <=$i; $j++){
        echo " * ";
    } 
    echo "<br>";
}
for ($i=10; $i >=0 ; $i--) {
    // echo "i",$i;
    for ($j=0; $j <=$i; $j++){
        // echo "j:",$j;
        if($j==0|| $i==$j || $i==10 )  {  
            echo("*");  
        }
        else{
            echo("&nbsp;&nbsp;");  
        }  
    } 
    echo "<br>";
}

?>