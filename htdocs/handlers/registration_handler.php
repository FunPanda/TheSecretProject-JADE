<?php
include_once("../refr/database.php");
$usr = new User;

$usr->storeFormValues("a", hash("sha512", md5("b") + "b"));
echo $usr->register("a",hash("sha512", md5("b") + "b"));
?>