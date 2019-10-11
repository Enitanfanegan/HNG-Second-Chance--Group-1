<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaint Form</title>
    <link rel="stylesheet" href="complaint.css">
    <body>
    <div class="container">
        <h1>Complaint Form</h1>
        <p>Please fill out the following form with your complaint. We will review your request and follow up with you as soon as possible.</p>
        <form action="complaint_post.php" method="POST">

            <div class="first-lastname">
            <label for="firstname">Name</label>
            <br>
            <input type="text" pattern="[a-zA-Z]{3,}" title="Please enter at least 3 characters"placeholder="First Name" name="firstname" required>
            <label for="lastname"></label>
            <input type="text" placeholder="Last Name" name="lastname" pattern="[a-zA-Z]{3,}" title="Please enter at least 3 characters"required>
            <br> <br>
            <label for="lastname">Slack username</label><br>
            <input type="text" placeholder="slack username" name="slack" pattern="[a-zA-Z]{3,}" title="Please enter at least 3 characters"required>

            <label for="lastname">mentors</label>
            <select  style="border:1px solid #c9472c; padding:0.5em; margin-left:1.9; border-radius:6px; width:200px;" type="text" placeholder="slack username" name="mentor" pattern="[a-zA-Z]{3,}" title="Please enter at least 3 characters"required>
                <option name="xylux"> xylux</option>
                <option name="Edeediong"> Edeediong</option>
                <option name="professor"> professor</option>
                <option name="ghost"> ghost</option>
                <option name="adefayoCodes"> adefayoCodes</option>

</select>
            </div>

            <div class="email">
            <label for="email">Email</label>
            <br>
            <input type="text" placeholder="Email" name="email" pattern="[a-zA-Z0-9]{3,}@[a-z]{3,}[.]{1}[a-z]{2,}" title="Please enter a valid email" required>
            </div>

            <div class="phone">
            <label for="phone">Phone</label>
            <br>
            <input type="text" placeholder="+2347000000000" name="phone" pattern="[+][0-9]{12,}" title="Please enter a valid phone number" required>
            </div>

            <div class="textarea">
            <label for="complaint">Complaint</label>
            <br>
            <textarea type="text" placeholder="Message..." name="msg" required></textarea>
            </div>

            <div class="submitbtn">
            <button type="submit" class="submitbtn" name="submit">SUBMIT <img src="https://res.cloudinary.com/walebant/image/upload/v1570629711/right-arrow.svg" alt="right-arrow"></button>
            </div>
        </form>
    </div>
        
    </body>
</html>