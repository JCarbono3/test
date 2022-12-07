<?php

$name = "localhost";
$email = "root";
$password = "";

$db_name = "tinglardb";

$connection = mysqli_connect($name, $email, $password, $db_name);

if(!$connection)
{

    echo "Connection failed";

}


?>