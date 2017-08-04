<?php
include 'user.php';
global $connect;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotels | Journey Guider</title>
    <link rel="stylesheet" href="CSS Files/Hotels.css">
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
            <li><a class="homered" href="Hotels.php">HOTELS</a></li>
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

<p id="image_word">
    Tranquility
</p>

<div id="searchbox">

    <div id="countryname">Country</div>
    <div id="checkin">Check-in</div>
    <div id="checkout">Check-out</div>
    <div id="guest">Guests</div>
    <div id="search">
        <button id="sbutton">Search</button>
    </div>

</div>

<div id="hotels">
    <ul>
        <li class="list-hotel" id="h1">
            <fieldset>
                <legend>Six Seasons Hotel</legend>
                <div class="hotelInfo">
                    <a>
                        <div id="SSHpic" class="hotelPic"></div>
                        <div class="hotelDetails">
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Dhaka

</span>
                            <h3>Reviews</h3>
                            <p>"First time Dhaka only hotel room, hotel coffeehouse for breakfast and to work. Cannot
                                comment
                                much."</p></div>
                    </a>
                </div>

            </fieldset>
        </li>


        <li class="list-hotel" id="h2">
            <fieldset>
                <legend align="right">Lakeshore Banani</legend>

                <div class="hotelInfo">
                    <a>
                        <div id="LBpic" class="hotelPic"></div>
                        <div class="hotelDetails">
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Dhaka

</span>
                            <h3>Reviews</h3>
                            <p>"The staff at Lakeshore Banani is nothing short of excellent. Always friendly, always
                                willing to
                                offer assistance. Very well located, close to Gulshan 1 and 2. Very impressed and will
                                absolutely
                                return. Thank you for a great first trip to Dhaka."</p>
                        </div>
                    </a>
                </div>
            </fieldset>
        </li>

        <li class="list-hotel" id="h3">
            <fieldset>
                <legend>Westin Dhaka</legend>
                <div class="hotelInfo">
                    <a>
                        <div id="WDpic" class="hotelPic"></div>
                        <div class="hotelDetails">

                            <h3>Reviews</h3>
                            <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Dhaka

</span>
                            <p>"only think is missing no children activities. it would be good if you add children
                                activities</p></div>

                    </a>
                </div>
            </fieldset>
        </li>

        <li class="list-hotel" id="h4">
            <fieldset>
                <legend align="right">Radisson Blue Water Garden</legend>
                <div class="hotelInfo">
                    <a>
                        <div id="RBWGpic" class="hotelPic"></div>
                        <div class="hotelDetails">

                            <h3>Reviews</h3>
                            <p>"Excellent service during the stay from Jan 10 to Jan 12, 2017"</p></div>
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Dhaka

</span>
                    </a>
                </div>
            </fieldset>
        </li>

        <li class="list-hotel" id="h5">
            <fieldset>
                <legend>Platinum Grand</legend>
                <div class="hotelInfo">
                    <a>
                        <div id="PGpic" class="hotelPic"></div>
                        <div class="hotelDetails">

                            <h3>Reviews</h3>
                            <p>"Good enough for business. Airport limousine service is excellent."</p></div>
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Chittagong

</span>
                    </a>
                </div>
            </fieldset>
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