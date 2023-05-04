<?php 

class mobile
{
    function call()
    {
        echo "<h1>CAll</h1></br>";
    }
    function sms()
    {
        echo "sms</br>";
        
    }
    function internet()
    {
        
        echo "internet";
    }
}

$mymobile = new mobile;


$mymobile->call();
$mymobile->sms();
$mymobile->internet();
?>