<?php

function insertData($firstname, $lastname, $email, $age, $country)
{
    global $link;

    $sql = "INSERT INTO users (firstname, lastname, email, age, country)
            VALUES ('$firstname', '$lastname', '$email', '$age', '$country')";

    if (isset($_POST["submit"])) {
        mysqli_query($link, $sql);
        header("Location:" . $_SERVER["PHP_SELF"]);
    }
}