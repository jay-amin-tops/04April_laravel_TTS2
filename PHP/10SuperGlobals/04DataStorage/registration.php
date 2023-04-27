<?php
require_once("header.php");
// require_once("header45.php")
require_once("header.php");
require_once("header.php");
// echo "<pre>";
// $_REQUEST
// $_GET
// $_POST
print_r($_POST);
// echo time();
if (isset($_POST['registration'])) {
    // echo "inside post";
    setcookie("username",$_REQUEST['username'],time()+36000);
    setcookie("password",$_REQUEST['password'],time()+36000);
    setcookie("email",$_REQUEST['email'],time()+36000);
    header("location:login.php");
}
// echo "</pre>";

?>
<style>
    /* * {
        border: 1px solid
    } */
</style>
<!-- <h2>Login</h2> -->
<div class="container">
    <!-- <h2>Login</h2> -->
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <div class="card">
                <div class="card-header text-center"><h3>Registration</h3></div>
                <!-- <form action="serverpadge.php" method="get"> -->
                <!-- <form> default get method -->
                <form method="post">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="email" placeholder="Enter Email your Address" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="registration" id="registration">
                                <input type="reset" class="btn btn-danger" name="reset" value="Cancel" id="reset">
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<pre>
setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool
</pre>
<p>The unix time stamp is a way to track time as a running total of seconds. This count starts at the Unix Epoch on January 1st, 1970 at UTC. Therefore,</p>
<p>cookies are not able to store multiple data</p>
<p>for storing moultiple data we needs to create multiple cookies</p>

</body>

</html>