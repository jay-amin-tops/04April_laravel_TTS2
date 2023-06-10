<?php
class Controller{
    // Static Base URL START
    // public $baseURL = "http://localhost/laravel/04April_laravel_shailesh_TTS2/PHP/14Project/MVC/";
    // Static Base URL END
    public $baseURL = "";
    
    public function __construct() {
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
        echo $this->baseURL;
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
                
                default:
                    # code...
                    break;
            }
        }else{
            header("location:home");
        }
    }

}


$Controller = new Controller;
?>