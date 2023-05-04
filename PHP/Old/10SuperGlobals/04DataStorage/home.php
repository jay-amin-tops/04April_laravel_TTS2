<?php 
include("header.php");
// include("header.php");
// include("header45.php");
// include("header.php");

?>
<h2>welcome to my site</h2>
<h2>Types of Errors</h2>
<ol>
    <li>Parse</li>
    <li>fatal</li>
    <li>notice</li>
    <li>warning</li>
</ol>
for include one page data to other we can use below functions 
<ol>
    <li>include</li>
    <li>include_once</li>
    <li>require</li>
    <li>require_once</li>
</ol>
<h2>SESSION</h2>
<p>In general, session refers to a frame of communication between two medium. A PHP session is used to store data on a server rather than the computer of the user. Session identifiers or SID is a unique number which is used to identify every user in a session based environment. The SID is used to link the user with his information on the server like posts, emails etc.</p>
<h2>How are sessions better than cookies?</h2>
<p>Although cookies are also used for storing user related data, they have serious security issues because cookies are stored on the user’s computer and thus they are open to attackers to easily modify the content of the cookie. Addition of harmful data by the attackers in the cookie may result in the breakdown of the application.
Apart from that cookies affect the performance of a site since cookies send the user data each time the user views a page. Every time the browser requests a URL to the server, all the cookie data for that website is automatically sent to the server within the request.</p>
<ul class="chunklist chunklist_reference"><li><a href="function.session-abort.php">session_abort</a> — Discard session array changes and finish session</li><li><a href="function.session-cache-expire.php">session_cache_expire</a> — Get and/or set current cache expire</li><li><a href="function.session-cache-limiter.php">session_cache_limiter</a> — Get and/or set the current cache limiter</li><li><a href="function.session-commit.php">session_commit</a> — Alias of session_write_close</li><li><a href="function.session-create-id.php">session_create_id</a> — Create new session id</li><li><a href="function.session-decode.php">session_decode</a> — Decodes session data from a session encoded string</li><li><a href="function.session-destroy.php">session_destroy</a> — Destroys all data registered to a session</li><li><a href="function.session-encode.php">session_encode</a> — Encodes the current session data as a session encoded string</li><li><a href="function.session-gc.php">session_gc</a> — Perform session data garbage collection</li><li><a href="function.session-get-cookie-params.php">session_get_cookie_params</a> — Get the session cookie parameters</li><li><a href="function.session-id.php">session_id</a> — Get and/or set the current session id</li><li><a href="function.session-module-name.php">session_module_name</a> — Get and/or set the current session module</li><li><a href="function.session-name.php">session_name</a> — Get and/or set the current session name</li><li><a href="function.session-regenerate-id.php">session_regenerate_id</a> — Update the current session id with a newly generated one</li><li><a href="function.session-register-shutdown.php">session_register_shutdown</a> — Session shutdown function</li><li><a href="function.session-reset.php">session_reset</a> — Re-initialize session array with original values</li><li><a href="function.session-save-path.php">session_save_path</a> — Get and/or set the current session save path</li><li><a href="function.session-set-cookie-params.php">session_set_cookie_params</a> — Set the session cookie parameters</li><li><a href="function.session-set-save-handler.php">session_set_save_handler</a> — Sets user-level session storage functions</li><li><a href="function.session-start.php">session_start</a> — Start new or resume existing session</li><li><a href="function.session-status.php">session_status</a> — Returns the current session status</li><li><a href="function.session-unset.php">session_unset</a> — Free all session variables</li><li><a href="function.session-write-close.php">session_write_close</a> — Write session data and end session</li></ul>
</body>
</html>