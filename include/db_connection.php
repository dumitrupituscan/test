<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "my_project";

$firstname = trim(htmlspecialchars(ucfirst($_POST["firstname"])));
$lastname = trim(htmlspecialchars(ucfirst($_POST["lastname"])));
$email = trim(htmlspecialchars($_POST["email"]));
$age = trim(htmlspecialchars(ucfirst($_POST["age"])));
$country = trim(htmlspecialchars(ucfirst($_POST["country"])));