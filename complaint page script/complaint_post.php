<?php
require_once 'utils/utils.php';
 
session_start();
$conn = new mysqli("localhost", "root", "", "inten");
//use this for our db connection. Please always include thsi

if ($conn->connect_error) {
    die("connection failed". $conn->connect_error);
}
/*please just do the server side validation only*/
$_SESSION['intern_id'] = 1;
$_SESSION['mentor_id'] = 2;
$_SESSION['mentor_type'] = "xylux";
// we will get the sessions form the login.php. so because it is not available now i decided to create a dummy seesion represent what I inted to achieve.
// if a mentor type is the same with what the intern selected--that si actually ehat i was trying to acjieve here
// here i should say, where mentor type is equal to professor

if (isset($_POST['submit'])) {
    $mento = $_POST['mentor'] =  $_SESSION['mentor_type'] ;

    $fname = validateInput($_POST['firstname']);
    $lname = validateInput($_POST['lastname']);
    $slackName = validateInput($_POST['slack']);
    $mail = validateInput($_POST['email']);
    $phone = validateInput($_POST['phone']);
    $complaint = validateInput($_POST['msg']);
    $mentor_id= validateInput($_SESSION['mentor_id']);
    $int_id= validateInput($_SESSION['intern_id']);
    $mentorType = validateInput($mento);

    if (strlen($fname) > 16 or strlen($lname) > 16) {
        echo 'Error : Your names are too long.';
        header('Location: ../complaint.php');
        exit;
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo 'Error : Your email is not valid.';
        header('Location: ../complaint.php');
        exit;
    } elseif ($phone !== filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        echo 'Error : Your phone number is not valid.';
        header('Location: ../complaint.php');
        exit;
    } else {
        $sql = "INSERT INTO intern_complaint (intern_id, mentor_id, intern_Fname, intern_Lname, intern_slack, intern_email, intern_phone, intern_msg, mentor_type) VALUES (?,?,?,?,?,?,?,?,?)";

        $ourStmt = $conn->prepare($sql);
        $ourStmt->bind_param("iisssssss", $int_id, $mentor_id, $fname, $lname, $slackName, $mail, $phone, $complaint, $mentorType);
        $ourStmt->execute();
        $ourStmt->store_result();
        var_dump($ourStmt->store_result());

        if ($ourStmt->affected_rows) {
            echo "<script> alert('Successful!') </script>";
            echo  "<script type='text/javascript'>document.location='complaint.php'</script>";
        } else {
            echo "there was an error somewhere and we dont know about that";
        }
    }
}
