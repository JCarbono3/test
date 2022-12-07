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
        
    <h1 id="form_header">Login</h1>

    <form action="loginCheck.php" method="post" class="frmRegister">

    <?php if(isset($_GET['success']))
    {?>
        <p class="success"><?php echo $_GET['success'];?></p>
    <?php } ?>

    <?php if(isset($_GET['error']))
    {?>
        <p class="error"><?php echo $_GET['error'];?></p>
    <?php } ?>

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <button id="Submit">Submit</button>

    </form>

    <h4>Don't have an account? <a href="register.php">Register Here!</a></h4>

</body>
</html>