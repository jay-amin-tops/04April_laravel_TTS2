<?php

if (isset($_REQUEST['save'])) {
    $file_name = "downloadfile.zip";
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    // flush();
    readfile($file_name); //Absolute URL
    exit();
}

?>


<form method="post">
    <button name="save" type="submit">Click Header Redirection</button>
</form>