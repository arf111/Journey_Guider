<?php
//session_start();
//session_start();
include 'user.php';
//$_SESSION['loggedin'] = "";


global $connect;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>journey_guider</title>
    <link rel="stylesheet" href="CSS Files/style.css">
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
            <li><a class="homered" href="Home.php">HOME</a></li>
            <li><a class="homeblack" href="Hotels.php">HOTELS</a></li>
            <li><a class="homeblack" href="Around_the_world.php">AROUND THE WORLD</a></li>
            <li><a class="homeblack" href="Home.php">ABOUT US</a></li>
            <li><?php if((isset($_SESSION['loggedin']) && !$_SESSION['loggedin'])): ?><a class="homeblack" href="Login.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                    Log In

                    <?php elseif(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']):  ?>
                    <a class="homeblack" href="logut.php"><i class="fa fa-user-o" aria-hidden="true"></i>    <?php echo 'Log Out'//echo $_SESSION['name'];?>
                        <?php else: ?> <a class="homeblack" href="Login.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                            Log In
                        <?php endif; ?></a></li>


        </ul>
    </nav>
</header>

<p id="image_word">
    Discover Yourself
</p>

<div id="destinations">
    <h2>Popular destinations</h2><br>
    <ul>

            <li>
                <a href="Around_the_world.php?id=1" name="Australia">
                    <form action="" method="post">
                    <div id="imageKL">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=2" name="Malaysia">
                    <form action="" method="post">
                    <div id="imageBK">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=3" name="Singapore">
                    <form action="" method="post">
                    <div id="imageDB">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=4" name="Paris">
                    <form action="" method="post">
                    <div id="imageSP">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=5" name="Italy">
                    <form action="" method="post">
                    <div id="imageAS">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=6" name="Switzerland">
                    <form action="" method="post">
                    <div id="imageSZ">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=7" name="Japan">
                    <form action="" method="post">
                    <div id="imageFR">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

            <li>
                <a href="Around_the_world.php?id=8" name="Brazil">
                    <form action="" method="post">
                    <div id="imageIT">
                        <p></p>
                    </div>
                    </form>
                </a>
            </li>

    </ul>
</div>


<footer>
    <div class="wrapper">
        <nav>
            <ul>
                <li><a class="homered2" href="Home.php">HOME</a></li>
                <li><a class="homeblack2" href="Hotels.php">HOTELS</a></li>
                <li><a class="homeblack2" href="Around_the_world.php">AROUND THE WORLD</a></li>
                <li><a class="homeblack2" href="Home.php">ABOUT US</a></li>
            </ul>
        </nav>
    </div>
    <p>
        @Copyright by Journey Guider
    </p>
</footer>

</body>
</html>