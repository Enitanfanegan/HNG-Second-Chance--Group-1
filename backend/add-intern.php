<?php
session_start();
if (isset($_POST['submit']) || true) {
    require "Database.php";
    $db = new Database; //Instance of Database Class. To be used when running queries

    $fullname           = $_POST['fullname'];
    $email              = $_POST['email'];
    $state_of_residence = $_POST['state_of_residence'];
    $slack_username     = $_POST['slack_username'];
    $password           = $_POST['password'];
    $confirm_password   = $_POST['confirm'];

    $errors = [];
//Checks if any field is empty
    if (empty($fullname)
        || empty($email)
        || empty($state_of_residence)
        || empty($slack_username)
        || empty($password)
        || empty($confirm_password)
    ) {
        $errors[] = "Fields cannot be empty";
    }

    //Checks if fullname has anything other than  letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
        $errors[] = "Full name can contain only letters and white space";
    }

    //Check if password is not equal to confirm password
    if ($password != $confirm_password) {
        $errors[] = "Password Does not match";
    }

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter valid email address";
    }

//Check if there was any error, assign errors to a session variable and go back to signup page
    if ($errors) {
        $_SESSION["signup_error"] = $errors;
        header("location:../signup.php");
        exit();
    }

    $password = md5($password); //Hash the user password using md5 one way encryption

    //Time to add intern if there are no errors
    $sql = "INSERT INTO interns (`fullname`, `email`, `state_of_residence`, `slack_username`, `password`, `time`)
    VALUES('$fullname', '$email', '$state_of_residence', '$slack_username', '$password', NOW())";

    if ($db->query($sql) == true) {
        //If User is added, create a signupsuccess session variable and assign the details of user before redirecting it to login page

        $_SESSION["signup_success"]["message"]        = $fullname . "Added Successfully";
        $_SESSION["signup_success"]["fullname"]       = $fullname;
        $_SESSION["signup_success"]['email']          = $email;
        $_SESSION["signup_success"]['slack_username'] = $slack_username;

        header("location:../login.php");
        exit();

    } else {
        //If there was an error, head back to signup page
        $_SESSION["signup_error"] = ["Temporary Server Error"];
        header("location:../signup.php");
        exit();
    }
}