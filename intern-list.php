<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern List Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="intern-styles.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <!--navbar-->
        <nav 
        class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand logo" href="#" style="color: #C9472C" >INTERN PAGE LIST</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="dashboard.php">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="complaints.php">COMPLAINTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="forum.php">FORUM</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" style="color: #C9472C" href="logout.php">LOGOUT</a>
                            </li>
                    </ul>
                    <!--Search Input-->
                                <form class="form-inline" action="intern-list.php" method="post">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">                                    
                                  <img width="20px" src="https://res.cloudinary.com/dlq9o1289/image/upload/v1570628861/icons8-search_1_zjvsmo.svg" alt="Search-Icon">
                                   </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Search" aria-describedby="basic-addon1" name="search">
                                <input type="submit" class="form-control" name="search_btn" Value="search">
                                </div>
                            
                            </form>                     
                 </nav>
        <?php
            //search for the intern on the database
            if(isset($_POST['search_btn']) and $_POST['search_btn']="search"){ 
                 $search=$_POST['search'];
                 echo "<h3>Search Results</h3>";
                  // Check connection
                if($connection === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                 
                // Attempt select query execution
                $sql = "SELECT slack_username FROM intern_list INNER JOIN interns INNER JOIN stages INNER JOIN track ON interns.slack_username";
                if($result = mysqli_query($connection, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        $sn=0;
                        ?>

        <table contenteditable="true">
              <thead>
                    <th>S/N</th>
                    <th>CODE NO</th>
                    <th>SLACK USERNAME</th>
                    <th>TRACK</th>
                    <th>SUBMISSION URL</th>
                    <th>MENTOR REMARKS</th>
                    <th>INTERN FATE</th>        
            </thead>
                  <tbody>
                      <?php
                         while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $sn=++$sn . "</td>";
                                    echo "<td>" . $row['code_no'] . "</td>";
                                    echo "<td>" . $row['slack_username'] . "</td>";
                                    echo "<td>" . $row['track'] . "</td>";
                                    echo "<td>" . $row['submission_url'] . "</td>";
                                    echo "<td>" . $row['mentors_remark'] . "</td>";?>
                                    <td><button type="submit"class="passed" name="passed" value="passed">PASSED</button><button type="submit" class="resubmit" name="resubmit">RESUBMIT</button></td>
                        <?php
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "No Intern Record is found";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                    }
                    
                    // Close connection
                    mysqli_close($connection);

            }
        else { 

        ?>
           <!--Table-->

           <?php
                // List all the intern on the database
                if($connection === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                
                // Attempt select query execution
                $sql = "SELECT * FROM intern_list INNER JOIN interns INNER JOIN stages INNER JOIN track ON intern_list.intern_list_id= interns.intern_id=stages.stage_id=track.track_id";
                if($result = mysqli_query($connection, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        $sn=0;
                        ?>

        <table contenteditable="true">
              <thead>
                    <th>S/N</th>
                    <th>CODE NO</th>
                    <th>SLACK USERNAME</th>
                    <th>TRACK</th>
                    <th>SUBMISSION URL</th>
                    <th>MENTOR REMARKS</th>
                    <th>INTERN FATE</th>        
            </thead>
                  <tbody>
                      <?php
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $sn=++$sn . "</td>";
                                    echo "<td>" . $row['code_no'] . "</td>";
                                    echo "<td>" . $row['slack_username'] . "</td>";
                                    echo "<td>" . $row['track'] . "</td>";
                                    echo "<td>" . $row['submission_url'] . "</td>";
                                    echo "<td>" . $row['mentor_remarks'] . "</td>";?>
                                    <td><button type="submit"class="passed" name="passed" value="passed">PASSED</button><button type="submit" class="resubmit" name="resubmit">RESUBMIT</button></td>
                        <?php
                                echo "</tr>";
                            }
                            echo "</tbody></table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "No Intern Record is found";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
                    }
                    
                    // Close connection
                    mysqli_close($connection);

                }
         ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>
