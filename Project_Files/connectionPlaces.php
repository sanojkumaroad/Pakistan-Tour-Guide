<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projecttable";

// create connection

$conn=mysqli_connect($servername,$username,$password,$dbname );

if (!$conn) {
    echo "Connection Failed";
}
?>