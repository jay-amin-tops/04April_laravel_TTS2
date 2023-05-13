<?php
include_once("headerfile.php");
// include_once("headerfile.php");
// include_once("headerfile.php");
// include_once("headerfile1.php");
// include_once("headerfile.php");
?>
<h2>This page will contain About us data</h2>

<?php echo $_GET['data'] ?? "no data "; //null coalescing 

// Without null coalescing with if else START
if (isset($_GET['data'])) {
    echo $_GET['data'];
} else {
    echo "no data ";
};  
// Without null coalescing with if else END

// Without null coalescing or if else using ternary START
 echo (isset($_GET['data'])) ?$_GET['data'] :"no data "
// Without null coalescing with if else END
?>
</body>

</html>