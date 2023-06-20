<?php
date_default_timezone_set('Asia/Kolkata');
// mysqli_report(MYSQLI_REPORT_STRICT0);
class Model{
    public $connection = "";
    public function __construct() {
        // $this->connection = new mysqli("hostname","username","password","dbname");
        // $this->connection = new mysqli("localhost1","root","","masterdatabase");
        // $this->connection = mysqli_connect("localhost","root1","","masterdatabase");
        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase");
        } catch (\Exception $e) {
            // echo "<pre>";
            // print_r($e->getMessage());
            // echo "</pre>";
            // echo "inside catch";
            $ErrorMsg = PHP_EOL."Error Date Time >> ".date('d-m-Y h:i:s A').PHP_EOL."Error Msg >> ".$e->getMessage().PHP_EOL;
            echo $ErrorMsg;
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FileName = date('d_m_Y');
            file_put_contents("log/".$FileName."_log.txt",$ErrorMsg,FILE_APPEND);
        }
        // echo "<pre>";
        // print_r($this->connection);
        // echo "</pre>";
    }
    function login($uname,$password) {
        $SQL = "SELECT * FROM users WHERE password='$password' AND (username='$uname' OR email='$uname' OR mobile='$uname')";
        $SQLEx = $this->connection->query($SQL);
        // $FetchData = $SQLEx->fetch_all(); // returns an array index/numerical multidimensional
        // $FetchData = $SQLEx->fetch_array(); // returns an array index and associative
        // $FetchData = $SQLEx->fetch_column(); // returns an array
        // $FetchData = $SQLEx->fetch_row(); // returns an array single numeric array
        // $FetchData = $SQLEx->fetch_assoc(); // returns an array single
        // print_r($SQLEx) ;

        // Object access by -> array access by [index] 
        // echo "<pre>";
        // print_r($FetchData[0][1]);
        // print_r($FetchData);
        // print_r($FetchData->username);
        // echo "</pre>";
        if ($SQLEx->num_rows > 0) {
            $FetchData = $SQLEx->fetch_object();
            $ResponseData['Data']= $FetchData;    
            $ResponseData['Msg']= "Success";    
            $ResponseData['Code']= "1";    
        }else{
            $ResponseData['Data']= "0";    
            $ResponseData['Msg']= "Try again";    
            $ResponseData['Code']= "0";    
        }
        return $ResponseData;
    }
    // function select() : Array {
    //     $SQL = "";
    //     $SQLEx = $this->connection->query($SQL);
    // }
    function insert($tbl,$data) {
        // echo "<pre>";
        // print_r($data);
        // print_r(array_keys($data));
        $clms = implode(",",array_keys($data));
        $vals = implode("','",$data);
        $SQL = "INSERT INTO $tbl($clms)VALUES('$vals')";
        // $SQL = "INSERT INTO tblname(clm)VALUES('')";
        $SQLEx = $this->connection->query($SQL);
        // echo $SQLEx;
        if ($SQLEx) {
            $ResponseData['Data']= "1";    
            $ResponseData['Msg']= "Success";    
            $ResponseData['Code']= "1";    
        }else{
            $ResponseData['Data']= "0";    
            $ResponseData['Msg']= "Try again";    
            $ResponseData['Code']= "0";    
        }
        return $ResponseData;
    }
    // function update() : Array {
    //     $SQL = "";
    //     $SQLEx = $this->connection->query($SQL);
    // }
    // function delete() : Array {
    //     $SQL = "";
    //     $SQLEx = $this->connection->query($SQL);
    // }
}
// $Model = new Model;
// $Model->insert("users",array("username"=>"test","password"=>"123","gender"=>"Male"));
// $Model->insert("city",array("title"=>"abc"));
?>