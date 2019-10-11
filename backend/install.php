<?php
/* Run this install.php first on your browser to generate the database and required tables; Enter correct parameters to suite your host, user and password */

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

try {
    //Connect to Server
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    $sql = "CREATE DATABASE internship_manager";

	mysqli_query($conn, $sql); //Create Database
	echo "Database 'intership_manager' crfeated successfully<br>";
} catch (Exception $e) {
    die("Server Error " . mysqli_error($conn));

}
mysqli_close($conn);

$database = "internship_manager";

// Create connection with created database
$conn = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection was successfully established!<br><br>";

/*Since we will be creating many tables, in order to make it clean, we create an array of the queries we will run like below. This is an multi-dimensional associative array(an array whose child(ren) is also an array). So the children within is an array ["query"=>"query to be run", "success_message"=>"Message to be displayed if the query runs successfulyl"]
 */
$allSetupQueries = [
    [
        "query"           => "CREATE TABLE interns (
	`intern_id` int(11) NOT NULL AUTO_INCREMENT,
	`fullname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`state_of_residence` varchar(20) NOT NULL,
	`slack_username` varchar(20) NOT NULL,
	`password` varchar(50) NOT NULL,
	`time` datetime NOT NULL,
	PRIMARY KEY (intern_id)
	)",

        "success_message" => "Table 'interns' created successfully",
    ],
    [
        "query"           => "CREATE TABLE mentors (
	`mentor_id` int(11) NOT NULL AUTO_INCREMENT,
	`fullname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`slack_username` varchar(20) NOT NULL,
	`password` varchar(50) NOT NULL,
	`time` datetime NOT NULL,
	PRIMARY KEY (mentor_id)
	)",

        "success_message" => "Table 'mentors' created successfully",
    ],

    [
        "query" => "CREATE TABLE stages (
			`stage_id` int(11) NOT NULL AUTO_INCREMENT,
			`stage_name` varchar(20) NOT NULL,
			`details` text NOT NULL,
			PRIMARY KEY (stage_id)
			)", "success_message" => "Stages Table Created Successfully",
    ],

    [
        "query" => "CREATE TABLE tracks (
			`track_id` int(11) NOT NULL AUTO_INCREMENT,
			`track_name` varchar(20) NOT NULL,
			`details` text NOT NULL,
			PRIMARY KEY (track_id)
			)", "success_message" => "Tracks Table Created Successfully",
    ],

    
];

//Loop through the array using foreach and run each query to create those tables individually
foreach ($allSetupQueries as $query) {
    if ($conn->query($query['query']) === true) {
        echo $query['success_message']."<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

echo "<br>All is set now<br> You may want to run <b>testdata.php<b> to insert some dummy data into database tables";
$conn->close();