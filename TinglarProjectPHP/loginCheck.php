<?php
session_start();

include "db-connect.php";


if(isset($_POST["email"])&& isset($_POST["password"]))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if(empty($email))
    {
        header("Location: login.php?error=Email is Required.");
        exit();
    }
    else if(empty($password))
    {
        header("Location: login.php?error=Password is Required.");
        exit();
    }
    else
    {
        //hashing password
        $password = md5($password);

        $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);

            if($row['email'] === $email && $row['password'] === $password) 
            {
                $_SESSION['full_name'] = $row ['full_name'];
                $_SESSION['email'] = $row ['email'];
                $_SESSION['id'] = $row ['id'];
                header("Location: home.php");
                exit();
            }
            else
            {
                header("Location: login.php?error=Incorrect Email or Password.");
                exit();
            }
            
        }
        else
        {
            header("Location: login.php?error=Incorrect Email or Password.");
            exit();
        }
    }
}
else
{
    header("Location: /phpCodes/TinglarProjectPHP/login.php");
    exit();
}

?>