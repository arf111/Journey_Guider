<?php
include 'user.php';
global $connect;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Around The World | Journey Guider</title>
    <link rel="stylesheet" href="CSS Files/around_the_world.css">
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
            <li><a class="homered" href="Around_the_world.php">AROUND THE WORLD</a></li>
            <li><a class="homeblack" href="Home.php">ABOUT US</a>
            <li><?php if(!$_SESSION['loggedin']): ?><a class="homeblack" href="Login.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                        Log In

                    <?php elseif($_SESSION['loggedin']):  ?>
                    <a class="homeblack" href="logut.php"><i class="fa fa-user-o" aria-hidden="true"></i>    <?php echo 'Log Out'//echo $_SESSION['name'];?>
                    <?php endif; ?></a></li>

        </ul>
    </nav>
</header>

<p id="image_word">
    Immerse Yourself
</p>

<div class="art">
    <article>
        <iframe width="950" height="400" src="https://www.youtube.com/embed/uZ3tB1UO1hM" frameborder="0"
                allowfullscreen></iframe>

        <p>A beautiful country with a rich cultural heritage that blends Asian and European influence, Malaysia offers
            many
            attractions. We list for some of the best cultural and natural sights, venues and locations in Malaysia, from
            Kuala
            Lumpur’s finest Central Market to Malacca’s A Famosa fortress.
        </p>
        <h2>
            Perhentian Islands
        </h2>
        <p>
            Sea lovers planning to visit Malaysia should put the Perhentian Islands on the top of their list of places
            to see. This is a small archipelago with two main islands; Besar, the bigger, and Kecil, the smaller. Both
            boast splendid beaches, white sand, an amazingly blue, shallow sea and the shadows of tall palm trees. Apart
            from tourists, the islands are mostly uninhabited, making them a perfect place to disconnect and take a
            break from modern life. The Perhentian Islands are especially recommended to those who enjoy the sea not
            just for a swim, but also for water activities such as canoeing (both islands can be circumnavigated in a
            day), scuba diving and snorkeling. The islands are fringed by a coral reef, and the underwater life is rich
            with sea turtles and many species of tropical fish.
        </p>
        <div id="CMpic"></div>
        <h2>
            Langkawi
        </h2>
        <p>
            Langkawi is the main island of a group of 99, which form the archipelago with the same name. Often
            overlooked,
            especially by Western tourists, in favor of the better-known Thai islands and Singapore, Langkawi offers
            breathtaking scenery with its beautiful beaches, fine sand, crystal-clear water and coastal mangrove swamps.
            The
            inland areas are no less striking; the tropical jungles are thick with luxuriant vegetation and rich in
            fauna
            (the island’s name itself indicates an eagle with characteristic reddish feathers), and will impress nature
            lovers looking for a pristine, largely untouched rainforest.
        </p>
        <div id="LKpic"></div>
        <h2>
            Cameron Highlands
        </h2>
        <p>
            Sitting 1500 meters above sea level, the Cameron Highlands is an extensive hill station named after William
            Cameron, the British surveyor who stumbled upon the soft, curvy sides of these picturesque green hills in
            1885.
            The area hosts the largest tea plantations in Malaysia, which give it the characteristic, fuzzy appearance
            that
            attracts so many tourists here. Many also visit the hills and trek down the trails. But the Cameron
            Highlands’
            beauty and popularity are also due to its climate. With temperatures rarely dropping below 10°C or rising
            above
            21°C, this is the coolest region of Malaysia, and a wonderful break from the tropical Malaysian climate.
        </p>
        <div id="CHpic"></div>

    </article>
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