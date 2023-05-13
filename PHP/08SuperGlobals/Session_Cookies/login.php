<?php
require_once("headerfile.php");
// require_once("headerfile.php"); 
// require_once("headerfile.php"); 
// require_once("headerfile.php"); 
// require_once("headerfile.php"); 
if (isset($_REQUEST['btn-login'])) {
    echo "<pre>";
    print_r($_COOKIE['username']);
    echo "</pre>";
    if ($_POST['username'] != "" && $_POST['password'] != "" ) {
        if ($_POST['username'] == $_COOKIE['username'] && $_POST['password'] == $_COOKIE['password'] ) {
            echo "Login Success";
            $_SESSION['UserData'] = array("usernmae"=>$_COOKIE['username'],"password"=>$_COOKIE['password'],"email"=>$_COOKIE['email']);
            header("location:dashboard.php");
        }else{
            echo "Invalid user";

        }
    }else{
        echo "User Name and password required";
    }
    
}
?>
<!-- <h2>Login</h2> -->
<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="username" placeholder="Enter User Name" id="username">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" id="password">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-success" name="btn-login" value="Login" id="btn-login">
                                <input type="reset" class="btn btn-danger" value="Cancel">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-center">
                                <a href="registration.php">Click here to create new Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>