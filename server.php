<?php
include 'config.php';
//$conn = mysqli_connect($host,$user,$password,$database);
$dbh = new PDO("mysql:host=localhost;dbname=JW","root","");
if(!$dbh)
{
    die("Connection failed!".mysqli_connect_error());
}
else
{
    //echo "successful!";
}

?>