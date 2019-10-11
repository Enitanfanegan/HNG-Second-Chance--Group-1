<?php
declare(strict_types=1);
session_start();
require_once 'utils/utils.php';
require_once 'models/Complaint.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_complaint'])) {
        if (!isset($_POST['firstname']) or !isset($_POST['lastname']) or !isset($_POST['email']) or !isset($_POST['phone']) or !isset($_POST['complaint'])) {
            $_SESSION['error'] = 'Error : All fields are required';
            header('Location: ../complaint.php');
            exit;
        }
        $fname = validateInput($_POST['firstname']);
        $lname = validateInput($_POST['lastname']);
        $email = validateInput($_POST['email']);
        $phone = validateInput($_POST['phone']);
        $message = validateInput($_POST['complaint']);
        if (strlen($fname) > 16 or strlen($lname) > 16) {
            $_SESSION['error'] = 'Error : Your names are too long.';
            header('Location: ../complaint.php');
            exit;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'Error : Your email is not valid.';
            header('Location: ../complaint.php');
            exit;
        } elseif ($phone !== filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
            $_SESSION['error'] = 'Error : Your phone number is not valid.';
            header('Location: ../complaint.php');
            exit;
        } else {
            $complaint = saveComplaint($fname, $lname, $email, $phone, $message);
            if ($complaint) {
                $_SESSION['message']= 'Your complaint was submitted successfully';
            } else {
                $_SESSION['error']= 'An error occurred while filing your complaint. Ensure you are a register intern and try again';
            }
        }
    }
}
?>