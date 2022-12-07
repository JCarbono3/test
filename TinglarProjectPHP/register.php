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
        
    <h1 id="form_header">Register</h1>

    <form action="registerCheck.php" method="post" class="frmRegister" >

    <?php if(isset($_GET['error']))
    {?>
        <p class="error"><?php echo $_GET['error'];?></p>
    <?php } ?>

    <?php if(isset($_GET['success']))
    {?>
        <p class="success"><?php echo $_GET['success'];?></p>
    <?php } ?>

    <label for="name">Full Name</label>

    <?php if(isset($_GET['name']))
    {?> 
        <input type="text" id="name" name="name" value="<?php echo $_GET['name'];?>">
    <?php } 
    else
    {
        ?>
        <input type="text" id="name" name="name">
    <?php
    }
    ?>

    <label for="email">Email</label>

    <?php if(isset($_GET['email']))
    {?> 
        <input type="email" id="email" name="email" value="<?php echo $_GET['email'];?>">
    <?php } 
    else
    {
        ?>
        <input type="email" id="email" name="email">
    <?php
    }
    ?>

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <label for="confirm-password">Confirm Password</label>
    <input type="password" id="confirm-password" name="confirm-password">

    <button id="Submit">Submit</button>

    </form>

    <h4>Already have an account? <a href="login.php">Login Here!</a></h4>

</body>
</html>