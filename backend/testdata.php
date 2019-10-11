<?php
require "Database.php"; // Database connection class
$db = new Database; //Instantiate an object for the class

$sql = "INSERT INTO tracks (`track_name`,`details`)
    VALUES('Design','Product frontend designs...'),
    ('FrontEnd','Frontend description here'),
    ('BackEnd','Backend Description here'),
    ('Machine Learning','Machine Learning description here'),
    ('Digital Marketing','Digital Marketing here'),
    ('Dev Ops','Dev Ops description here')";

//($db->query($sql) == true) runs the query above and returns true if successful so we echo "Tracks added successfully" otherwise it echos "Error"
echo ($db->query($sql) == true) ? "Tracks added successfully. <br>" : "Error Inserting tracks <br>";

$sql = "INSERT INTO stages ( `stage_name`,`details`)
    VALUES('Stage 1','Update Slack profile picture, Open Lucid account, etc.'),
    ('Stage 2','Join any track channel and etc'),
    ('Stage 3','Stage 3 Description here'),
    ('Stage 4','Stage 4 Description here'),
    ('Stage 5','Stage 5 Description here'),
    ('Stage 6','Stage 6 Description here'),
    ('Stage 7','Stage 7 Description here'),
    ('Stage 8','Stage 8 Description here'),
    ('Stage 9','Stage 9 Description here'),
    ('Stage 10','Stage 10 Description here')";

echo ($db->query($sql) == true) ? "Stages added successfully" : "Error Inserting Stages";

//Add Mentors
$password = md5("xylux"); //Hash xylux as password
$password2 = md5("paul");
$sql      = "INSERT INTO mentors(`fullname`, `email`, `slack_username`, `password`, `time`)
    VALUES('Seyi Onifade', 'xylux@gmail.com', 'xylux', '$password', NOW()),
    ('Paul Underworld', 'paulunderworld@gmail.com', 'Paul', '$password2', NOW())";

echo ($db->query($sql) == true) ? "Mentors added successfully. <br>" : "Error Adding Mentors <br>";