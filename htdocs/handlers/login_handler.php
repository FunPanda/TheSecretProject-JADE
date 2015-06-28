<?php
//Variable Declaration
$usrname = $passwd = "";

include_once("../refr/database.php");

//Remove: Whitespace, Tab, Slashes; Convert to Safe Chars
function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//HASHES INPUT, SALT: md5 hashed INPUT
function hash_input($data){
    $data = hash("sha512", md5($data) + $data);
    return $data;
 }

//If INPUT is POST, CLEAN INPUT and Write to Variables
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usrname = clean_input($_POST["usrname"]);
    $passwd = clean_input($_POST["passwd"]);
}

$usr = new User();
$usr->storeFormValues($usrname, hash_input($passwd));

echo "\n";

if( $usr->userLogin() ) {
echo "Welcome";
} else {
echo "Incorrect Username/Password";
}

/*

echo $usrname;
echo "\n";
echo hash_input($passwd);

echo $usrname;
echo $passwd;
echo $_POST["usrname"];
echo $_POST["passwd"];
*/
?>