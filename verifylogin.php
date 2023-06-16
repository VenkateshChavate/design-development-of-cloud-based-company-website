<?php


$user= $_POST['username'];
$passwd= $_POST['passwd'];
$login=0;

$servername = "localhost";
$username = "root";
$password = "Venky@2002";
$dbname = "intracloud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  * FROM users where username='".$user."' and passwd='".$passwd."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $login=1;
   setcookie("loginstatus", $login);
   header("Location: carrer.php");
   } else {
   $login=0;
   
   header("Location: index.php?error");
}
$conn->close();

?>