<?php 

class Model{
    public function __construct(protected $db="") {
        try {
            $this->db = new mysqli("localhost","root","","april04"); 
        } catch (\Exception $e) {
            $ErrorMsg = PHP_EOL."Error Date Time >> ".date('d-m-Y h:i:s A').PHP_EOL."Error Msg >> ".$e->getMessage().PHP_EOL;
            echo $ErrorMsg;
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FileName = date('d_m_Y');
            file_put_contents("log/".$FileName."_log.txt",$ErrorMsg,FILE_APPEND);
        }
    }
    function insert($tbl,$data) {
        // echo "called";
        // print_r($this->db);
        $clms = implode(",",array_keys($data)) ;
        $vals = implode("','",$data) ;
        $SQL = "INSERT INTO $tbl($clms)VALUES('$vals')";
        $SQLEx = $this->db->query($SQL);
        // print_r($SQLEx);
        if ($SQLEx > 0) {
            $ResData['Data'] = "1";
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        }else{
            $ResData['Data'] = "0";
            $ResData['Msg'] = "try again";
            $ResData['Code'] = "0";

        }
        return $ResData;
    }
    function login($uname,$pass) {
        $SQL = "SELECT * FROM users WHERE password='$pass' AND (email='$uname' OR mobile='$uname' OR username='$uname') ";
        $SQLEx = $this->db->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            $ResData['Data'] = $SQLEx->fetch_object();
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        }else{
            $ResData['Data'] = "0";
            $ResData['Msg'] = "try again";
            $ResData['Code'] = "0";

        }
        return $ResData;
    }
    function select($tbl) {
        $SQL = "SELECT * FROM $tbl";
        $SQLEx = $this->db->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Data = $SQLEx->fetch_object()) {
                $FetchData[]=$Data;
            }
            $ResData['Data'] =$FetchData;
            $ResData['Msg'] = "Success";
            $ResData['Code'] = "1";
        }else{
            $ResData['Data'] = "0";
            $ResData['Msg'] = "try again";
            $ResData['Code'] = "0";

        }
        return $ResData;
    }
}


?>