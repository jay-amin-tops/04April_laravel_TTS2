<?php

if (isset($_REQUEST['save'])) {
    header("location:otherpage.php");
}

?>


<form method="post">
    <button name="save" type="submit">Click Header Redirection</button>
</form>