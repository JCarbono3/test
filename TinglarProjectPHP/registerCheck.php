<?php

include "db-connect.php";

if(isset($_POST["name"]) && isset($_POST["email"])&& isset($_POST["password"])&& isset($_POST["confirm-password"]))
{

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $password = validate($_POST['password']);
    $confpassword = validate($_POST['confirm-password']);
    
    $user_data = 'email=' . $email. '&name=' . $name;

    if(empty($name))
    {

        header("Location: register.php?error=Full Name is Required&$user_data");
        exit();

    }
    else if(empty($email))
    {

        header("Location: register.php?error=Email is Required&$user_data");
        exit();

    }
    else if(empty($password))
    {

        header("Location: register.php?error=Password is Required&$user_data");
        exit();

    }
    else if(empty($confpassword))
    {

        header("Location: register.php?error=Confirm Password is Required&$user_data");
        exit();

    }
    else if($password != $confpassword)
    {

        header("Location: register.php?error=Password and Confirm Password are not Equals&$user_data");
        exit();

    }
    else
    {
        //hashing password
        $password = md5($password);

        $sql = "SELECT * FROM tbluser WHERE email = '$email'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            header("Location: register.php?error=This email is already registered, try login in&$email");
            exit();
        }
        else
        {
            $sql2 = "INSERT INTO tbluser(full_name, email, password) VALUE ('$name', '$email', '$password')";

            $result2 = mysqli_query($connection, $sql2);

            if($result2)
            {
                header("Location: /phpCodes/TinglarProjectPHP/login.php");
                header("Location: login.php?success=Now you can login with the account you just registered.");
                exit();
            }
            else
            {
                header("Location: register.php?error=An unknow error occurred&$name");
                exit();
            }
        }
    }
}
else
{
    header("Location: /phpCodes/TinglarProjectPHP/login.php");
    exit();
}

?>