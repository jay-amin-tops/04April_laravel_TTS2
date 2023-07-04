<?php
session_start();
include_once("Model/Model.php");
class Controller extends Model{
    public $baseURL = "http://localhost/laravel/04April_laravel_shailesh_TTS2/PHP/MVCRev/Assets/";
    public function __construct() {
        ob_start();
        parent::__construct();
        
        // parent::__construct("april04");
        if ( isset($_SERVER['PATH_INFO']) ) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    // echo "called";
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;
                case '/login':
                    include_once("Views/loginpage.php");
                    if(isset($_POST['btn-login'])) {
                        $LoginRes = $this->login($_POST['username'],$_POST['password']);
                        if ($LoginRes['Code'] == 1) {
                            
                            // echo "<pre>";
                            // print_r($LoginRes['Data']->role_id);
                            $_SESSION['userData']=$LoginRes['Data'];
                            if ($LoginRes['Data']->role_id == 1) {
                                # code...
                                echo "<script> alert('Hello admin'); window.location.href='admindashboard' </script>";
                            } else {
                                echo "<script> alert('Login success'); window.location.href='home' </script>";
                                # code...
                            }
                            

                        }else{
                            echo "<script> alert('invalid user') </script>";
                        }
                        echo "</pre>";
                    }
                    break;

                case '/registration':
                    // echo "called";
                    // include_once("Views/header.php");
                    include_once("Views/registration.php");
                    if (isset($_POST['registration'])) {
                        array_pop($_POST);
                        $Hobbies = implode(",",$_POST['chk']);
                        unset($_POST['chk']);
                        $Data = array_merge($_POST,array("hobbies"=>$Hobbies));
                        // echo "<pre>";
                        // print_r($Data);
                        // echo "</pre>";
                        
                        // $Data = array("username"=>"test",
                        //                "password"=>"123", 
                        //                "email"=>"test@mail.com", 
                        //                "gender"=>"Male", 
                        //                "mobile"=>"9879878955", 
                        //                "hobbies"=>"Circket,music", 
                        //                "city"=>"1", 
                        //                "profile_pic"=>"default.jpg");
                        // $Data = array("username"=>$_POST['username'],
                        //                "password"=>$_POST['password'], 
                        //                "email"=>$_POST[''], 
                        //                "gender"=>$_POST[''], 
                        //                "mobile"=>"9879878955", 
                        //                "hobbies"=>"Circket,music", 
                        //                "city"=>"1", 
                        //                "profile_pic"=>"default.jpg");
                        $Res = $this->insert("users",$Data);
                        echo "<pre>";
                        print_r($Res['Code']);
                        if ($Res['Code'] == 1) {
                            header("location:login");
                        }
                    }
                    // include_once("Views/footer.php");
                    break;
                case '/admindashboard':
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/dashboard.php");
                    include_once("Views/admin/footer.php");
                    // echo "Welcome to admin dashboard";
                    break;
                case '/viewallusers':
                    $AllUsers = $this->select("users");
                    // echo "<pre>";
                    // print_r($AllUsers);
                    // echo "</pre>";
                    // exit;
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/viewusers.php");
                    include_once("Views/admin/footer.php");
                    // echo "Welcome to admin dashboard";
                    break;
                default:
                    # code...
                    break;
            }
        }else{
            header("location:home");
        }
        ob_flush();
    }
}

$Controller = new Controller;
?>