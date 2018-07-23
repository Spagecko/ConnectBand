<?php
session_start();
unset ($_SESSION["userid"]);
unset ($_SESSION["username"]);
session_unset();
session_destroy();
echo "called";
$url = "http://localhost/connect%20band/index.php";
header('Location: '.$url);

?>