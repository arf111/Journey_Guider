<?php
include 'user.php';
global $connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>journey_guider</title>
    <link rel="stylesheet" href="CSS Files/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.css">
    <link rel="stylesheet" href="icons/map-icons-master/dist/css/map-icons.min.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.css">
    <link rel="stylesheet" href="icons/Font-Awesome-master/css/font-awesome.min.css">
</head>
<body>

<header>
    <nav>
        <h1>Journey Guider</h1>
        <ul id="nav">
            <li><a class="homeblack" href="Home.php">HOME</a></li>
            <li><a class="homeblack" href="Hotels.php">HOTELS</a></li>
            <li><a class="homeblack" href="Around_the_world.php">AROUND THE WORLD</a></li>
            <li><a class="homeblack" href="Home.php">ABOUT US</a></li>
            <li><?php if(isset($_SESSION['loggedin']) && !$_SESSION['loggedin']): ?><a class="homeblack" href="Login.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                    Log In

                    <?php elseif(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']):  ?>
                    <a class="homeblack" href="logut.php"><i class="fa fa-user-o" aria-hidden="true"></i>    <?php echo 'Log Out'//echo $_SESSION['name'];?>
                        <?php else: ?> <a class="homeblack" href="Login.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                            Log In
                            <?php endif; ?></a></li>


        </ul>
    </nav>
</header>

<div id="login">
    <fieldset>
        <legend>Sign Up</legend>
        <form action="" method="post">
            <br>
            <input type="email" name="email" placeholder="Email ID"> <br>

            <br>
            <input type="text" name="username" placeholder="Username"> <br><br>
            <input type="password" name="password" placeholder="Password"> <br><br>
            <input name="action" type="hidden" value="signup" >
            <input type="submit" value="Sign Up">
        </form>
    </fieldset>
    <div id="or">
        <div id="line1"></div>
        OR<span id="line2"></span></div>
    <fieldset>
        <legend>Sign In</legend>
        <form action="" method="post">
            <br>
            <input type="text" name="username" placeholder="Username"> <br><br>
            <input type="password" name="password" placeholder="Password"> <br><br>
            <input name="action" type="hidden" value="signin" >
            <input type="submit" value="login">
        </form>
    </fieldset>
</div>
</body>
</html>