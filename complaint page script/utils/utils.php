<?php
declare(strict_types=1);


function validateInput(string &$input): string
{
    return htmlspecialchars(stripslashes(trim($input)));
}

function saveComplaint(string $fname, string $lname, string $email, string $phone, string $message): bool
{
    $result = mysqli_query($conn, "SELECT id, stage_id FROM interns WHERE email = $email and ");
    $row = mysql_fetch_assoc($result);
    $id = (int) $row['id'];
    $stage_id = (int) $row['stage_id'];

    if (isset($id) and isset($stage_id)) {
        $result = mysqli_query($conn, "INSERT INTO complaints (intern_id, stage_id, message) VALUES ($id, $stage_id, '$message')");
        if ($result) {
            return true;
        }
    }
    return false;
}

