<?php
require_once("Model/Model.php");

class Controller extends Model{
    // Static Base URL START
    // public $baseURL = "http://localhost/laravel/04April_laravel_shailesh_TTS2/PHP/14Project/MVC/";
    // Static Base URL END
    public $baseURL = "";
    
    public function __construct() {
        ob_start();
        parent::__construct();
        // echo "<pre>";
        // echo $this->baseURL;
        // echo "<br>";
        // print_r($_SERVER);
        // print_r($_SERVER['PHP_SELF']);
        $PHPSelfArray = explode('/',$_SERVER['PHP_SELF']);
        // print_r($PHPSelfArray);
        // $this->baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".$PHPSelfArray[1]."/".$PHPSelfArray[2]."/".$PHPSelfArray[3]."/".$PHPSelfArray[4]."/".$PHPSelfArray[5]."/assets/"; 
        // $this->baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".$PHPSelfArray[1]."/".$PHPSelfArray[2]."/".$PHPSelfArray[3]."/".$PHPSelfArray[4]."/".$PHPSelfArray[5]."/"; 
        $this->baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/"; 
        foreach ($PHPSelfArray as $key => $value) {
            if ($value == "index.php") {
                break;
            }else{
                 $this->baseURL .= $value."/";
            }
        }
        // echo $this->baseURL;
        // echo "</pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/homepage.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/admin':
                    echo "welcome admin";
                    break;
                case '/login':
                    include_once("Views/signinpage.php");
                    if (isset($_POST['login'])) {
                        $LoginRes = $this->login($_POST['username'],$_POST['password']);
                        echo "<pre>";
                        print_r($LoginRes);
                        echo "</pre>";
                    }
                    break;
                case '/registration':
                    include_once("Views/registration.php");
                    if (isset($_POST['regist'])) {
                        # code...
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $hobbiesData = implode("",$_POST['hobby']);
                        $fullname = $_POST['fname']." ".$_POST['lname'];
                        array_pop($_POST);
                        array_pop($_POST);
                        unset($_POST['fname']);
                        unset($_POST['lname']);
                        $Data = array_merge($_POST,array("hobby"=>$hobbiesData,"fullname"=>$fullname));
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        
                        // Other way to send Form Data to Modle START.
                        // $Data = array("username"=>$_POST['username'],
                        // "fullname"=>$fullname,
                        // "email"=>$_POST['email'],
                        // "mobile"=>$_POST['mobile'],
                        // "password"=>$_POST['password'],
                        // "city"=>$_POST['city'],
                        // "gender"=>$_POST['gender'],
                        // "hobby"=>$hobbiesData);
                        // Other way to send Form Data to Modle END.

                        $InsertRes = $this->insert("users",$Data);
                        // echo "<pre>";
                        // print_r($InsertRes);
                        if($InsertRes['Code']){
                            echo "<script>
                            alert('REgister Success!!!')
                            window.location.href='login';
                            </script>";
                            // header("location:login");
                        }else{

                        }
                    }
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
            header("location:home");
        }
        ob_end_flush();

    }

}


$Controller = new Controller;
?>