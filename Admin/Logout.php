<?php
if (!isset($_SESSION)){session_start();}
$conn=mysqli_connect("localhost","root","","login");
$_SESSION=array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();



header("Location:..\index2.php");

?>