<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Login System Test</title>
</head>
<body>

<nav>  
    <div class="wrapper">
        <a href="index.php"><img src="img/logo-white.png" alt=""></a>
        <ul>
            <li><a href="index.php">Projects</a></li>
            <li><a href="index.php">Settings</a></li>
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </div>
</nav>


<div class="wrapper">