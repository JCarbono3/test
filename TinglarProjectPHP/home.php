<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email']))
{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Our stylesheet -->
    <link rel="stylesheet" href="\phpCodes\TinglarProjectPHP\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    
    <h1>Hello, <?php echo($_SESSION['full_name'])?>.</h1>

    <form action="homeCheck.php" method="post" class="frmProfile">
    
    <label for="description"></label>
    <textarea id='txtArea' oninput="auto_grow(this)" placeholder="Type your Description Here..." ></textarea>
    <button id='btnSave'>Save</button>

    </form>
    
    <a href="logout.php">Logout</a>
    

</body>
</html>

<!-- SCRIPTS DE JAVASCRIPT -->
<script src="profile.js"></script>

<?php
}
else
{
    header("Location: register.php");
    exit();
}
?>
