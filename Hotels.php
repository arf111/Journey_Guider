<?php
include 'user.php';
global $connect, $cname;

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
<!--
<div id="searchbox">

    <div id="countryname">Country</div>
    <div id="checkin">Check-in</div>
    <div id="checkout">Check-out</div>
    <div id="guest">Guests</div>
    <div id="search">
        <button id="sbutton">Search</button>
    </div>

</div>
-->

<form id = "country">
    <label for="cname">Select Country: </label>
    <select name="selectCountry" id="cname">
        <?php

        $sql = "SELECT Name, ID FROM" . " country";
        $student_query_result = mysqli_query($connect,$sql) or die(mysql_error());
        if(mysqli_num_rows($student_query_result) > 0){
        while ($row = mysqli_fetch_array($student_query_result))
        { $cname = $row['Name'];
            $id = $row['ID'];
        ?>

<option value = "<?php echo $id; ?>"><?php echo $cname?></option>
        <?php  }}?>
  </select>
    <input type="submit" value="Show"/>
</form>




<div id="hotels">
    <ul>
        <?php

        if(isset($_GET['selectCountry']))
        {
            $var = $_GET['selectCountry'];
        }
        else{
            $var =9;
        }

        $sql = "SELECT Name, Location, Image, Description FROM" . " hotels WHERE c_id = " . $var;
        //echo $sql;

        if ($strSQL = mysqli_query($connect, $sql)) {
            $i = 0;
// echo ";fadfs";
            $name[] = array(null, null, null, null ,null);
            $loc[] = array(null, null, null, null, null);
            $img[] = array(null, null, null, null, null);
            $des[] = array(null, null, null, null, null);
            $j = 1;
            while ($Results = mysqli_fetch_assoc($strSQL)) {
                $name[$i] = $Results["Name"];
                $loc[$i] = $Results["Location"];
                $img[$i] = $Results["Image"];
                $des[$i] = $Results["Description"];
                if($j%2!=0){
                    $align = "left";
                }
                else
                {
                    $align = "right";
                }
                ?>
        <li class="list-hotel">
            <fieldset>
                <legend align= <?php echo $align;?> ><?php echo $name[$i];?></legend>
                <div class="hotelInfo">
                    <a>
                        <div class="hotelPic" style= "width: 259px; height: 194px;" ><img src= <?php echo $img[$i];?>></div>
                        <div class="hotelDetails">

                            <h3>Description</h3>
                            <p><?php echo $des[$i];?></p></div>
                        <span>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?php echo $loc[$i];?>

</span>
                    </a>
                </div>

            </fieldset>
        </li>



        <?php
$j++;
        }
        }
        ?>
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