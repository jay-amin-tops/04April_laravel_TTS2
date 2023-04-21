<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.</p>
<ol>
    <li>$_ENV</li>
    <li>$_SERVER</li>
    <li>$_GET</li>
    <li>$_POST</li>
    <li>$_REQUEST</li>
    <li>$_FILES</li>
    <li>$GLOBALS</li>
    <li>$_SESSION</li>
    <li>$_COOKIE</li>
</ol>

<h2>Infomatic</h2>
<ul>
    <li>$_ENV</li>
    <li>$_SERVER</li>
</ul>
<h2>Data Receiver</h2>
<ul>
    <li> <h2> $_GET</h2> <p>The $_GET variable is a PHP superglobal that collects data from an HTML form after submission. The HTML form is structured in a way that $_GET is used as a method. $_GET can also be used for retrieving data sent in a uniform resource locator.</p></li>
    <li> <h2> $_POST</h2> <p>Just like the $_GET variable, $_POST collects values from a HTML form. Information sent using this method is not displayed in the URL. There is also no limit to the number of characters that can be sent at a time.</p></li>
    <li> <h2> $_REQUEST</h2> <p>The $_REQUEST variable is a PHP superglobal that is used to collect data after submitting a form. It contains the contents of $_GET, $_POST and even $_COOKIE by default. Data from various fields can be collected by PHP using the $_REQUEST variable.</p></li>
    <li> <h2> $_FILES</h2> <p>$_FILES is a variable that contains items that are uploaded using HTTP POST method. The $_FILES array contains several elements which are stated below:

</p>
<ul>
<li>
<p>$_FILES['file']['name'] - This is usually the original name of file to be uploaded.</p>
</li>
<li>
<p>$_FILES['file']['type'] - This refers to the type of the file being uploaded.</p>
</li>
<li>
<p>$_FILES['file']['size'] - The file size in bytes.</p>
</li>
<li>
<p>$_FILES['file']['tmp_name'] - It refers to a temporary filename of the storage file uploaded on the server.</p>
</li>
<li>
<p>$_FILE['file']['error']- The file upload's associated error code.</p>
</li>
</ul>
</li>
    <li>
    <h2> $GLOBALS</h2>    
    <p>$GLOBALS is a PHP variable that is used in accessing other global variables within a PHP script. All the PHP global variables are kept in an array known as $GLOBALS[index]. The index holds the variable name.</p>
    </li>
</ul>
<h2>Data Store</h2>
<ul>
    <li> <h2> $_SESSION</h2> <p>A $_SESSION variable is a PHP superglobal that stores and avails information about a site user every time the user opens the site until its closure.

Each time a user visits a site, a session is started. The function below is used to start a session in the PHP code;</p></li>
    <li> <h2> $_COOKIE</h2> <p>A cookie is a small file that is stored in a user's computer by the server. It identifies the user. Whenever a request is made to a server. A cookie is usually sent alongside the request. PHP creates cookies using the setcookie() function.</p></li>
</ul>

</body>
</html>