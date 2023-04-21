<?php
// if (isset($_GET['usernamegetmethod'])) {
//     echo "Hello User : ".$_GET['usernamegetmethod'];
// }
if (isset($_GET['btn'])) {
    echo "<br>Hello User : ".$_GET['usernamegetmethod'];
}
if (isset($_REQUEST['btn'])) {
    echo "<pre>$ _REQUEST";
    print_r($_REQUEST);
    echo "</pre>";
}
echo "<pre>GLOBALS";
print_r($GLOBALS);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Get Mthod Form</h3>
    <form method="get">
        <input type="text" name="usernamegetmethod" id="">
        <input type="submit" name="btn" id="">
    </form>
    <h3>POST Mthod Form</h3>
    <?php if (isset($_POST['btnpost'])) {
    echo "<br>Hello User Post method: ".$_POST['usernamepostmethod'];
}
?>
    <form method="post">
        <input type="text" name="usernamepostmethod" id="">
        <input type="submit" name="btnpost" id="">
    </form>
    <h3>File only supported by post method</h3>
    <?php 
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
?>
    <!-- <form method="post" > -->
    <!-- <form method="get" enctype="multipart/form-data"> -->
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="usernamepostmethod" id="">
        <input type="file" name="img" id="">
        <input type="submit" name="btnpost" id="">
    </form>
</body>
</html>