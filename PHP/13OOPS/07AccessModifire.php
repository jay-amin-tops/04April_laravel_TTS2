<?php
class Books{
    public $PublicDM= "PublicDM";
    private $PrivateDM= "PrivateDM";
    protected $ProtectedDM= "ProtectedDM";
    public function AccessDM(){
        echo "<br>Public DM ",$this->PublicDM;
        echo "<br>Private DM ",$this->PrivateDM;
        echo "<br>Protected DM ",$this->ProtectedDM;
    }
}
class Details extends Books{
    public function AccessDMFromChild(){
        echo "Public DM ",$this->PublicDM;
        echo "<br>";
        // echo "Private DM ",$this->PrivateDM; //Undefined property: Details::$PrivateDM in.
        echo "<br>";
        echo "Protected DM ",$this->ProtectedDM;
    }
}
$objectOf = new Details;
echo $objectOf->AccessDM();
// echo $objectOf->PublicDM;
echo "<br>"; 
// echo $objectOf->PrivateDM; Cannot access private property
echo "<br>";
// echo $objectOf->ProtectedDM; Cannot access protected property
?>