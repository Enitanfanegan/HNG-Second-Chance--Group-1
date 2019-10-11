<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>
<link rel="stylesheet" type="text/css" href="signup.css" />
<link href="https://fonts.googleapis.com/css?family=Poppins|Work+Sans&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="Absolute-Center">
                <div class="col-md-12 text-center">

                    <h2>Welcome!</h2>
                    <p>Already have an account? <span><b><a href="#" style="color: orangered;">Log in</a></b></span></p>
                    <form action="backend/add-intern.php" method="POST" id="signupform">
                        <center>
                            <div style="display:none;" class="feedback alert alert-danger text-capitalize form-style">
                            </div>
                        </center>
                        <div class="form-group">
                            <input type="text" name="fullname" class="form-style" id="fname" placeholder="Full Name"
                                required />
                            <small>
                                <p id="validfname"></p>
                            </small>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-style" name="email" id="inputEmail"
                                aria-describedby="emailHelp" placeholder="Your email" required>

                        </div>
                        <div class="form-group">
                            <select type="text" class="form-style" id="state" aria-describedby="emailHelp"
                                name="state_of_residence" placeholder="Your email" required>
                                <option value="">State of Residence</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="CrossRiver">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="Abuja (FCT)">Abuja (FCT)</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-style" id="slack" aria-describedby="emailHelp"
                                name="slack_username" placeholder="slack Username" required>

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-style" id="password" placeholder="Enter Password"
                                name="password" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-style" id="confirm" name="confirm"
                                placeholder="Confirm Password" required>
                        </div>
                        <br>
                        <button type="submit" name="submit" id="submit"
                            style="background-color: orangered; color:white; border-radius: 10px; border:orangered; width:160px; height:40px;">Sign
                            Up</button>
                    </form>
                    <small>By signing up you are agreeing to our <span><a href="#">terms of service.</a> Privacy Policy
                        </span></small>
                </div>
            </div>

        </div>

    </div>

    <?php
//Build error message from backend if there was an error in the backend assign it to an input
if (isset($_SESSION["signup_error"])) {
    $error = implode("<br>", $_SESSION["signup_error"]);
    ?> <input type="text" hidden="hidden" id="error" value="<?php print $error;?>">
    <?php
unset($_SESSION["signup_error"]);
}?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="js/app.js"></script>



</body>

</html>