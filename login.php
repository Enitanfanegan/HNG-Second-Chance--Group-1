<?php
ob_start();
session_start();


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "intern_grader";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(isset($_POST['login'])) {

    $usertype = $_POST['usertype'];
    $username = $_POST['uname'];
    $password = $_POST['psw'];

	
    $query= "SELECT * FROM interns WHERE slack_username ='$username' AND password='$password' AND user_type='$usertype'";
    $result = mysqli_query($conn, $query);

    if($row=mysqli_fetch_array($result)){
        if($row['slack_username']==$username && $row['password']==$password && $row['user_type']=='mentor'){
			header("Location: mentors-dashboard-main.html");
			exit();
        }elseif($row['slack_username']==$username && $row['password']==$password && $row['user_type']=='intern'){
			header("Location: interns-dashboard-main.html");
			exit();
        }
    } else {
        echo '<script type="text/javascript">alert("Log-in unsuccessful! Email or password is incorrect")</script>';
		?>
            <script type = "text/javascript">
            window.location.href="login.html"</script>
            <?php
	}
}
ob_end_flush();
?>