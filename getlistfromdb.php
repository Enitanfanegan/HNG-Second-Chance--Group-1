<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern_grader";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_select_db($conn, 'intern_grader');

?>