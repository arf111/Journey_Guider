<?php
include 'user.php';
global $connect, $name, $id, $embed, $image;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else{
    $id = 1;
}
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
            <li><?php if (isset($_SESSION['loggedin']) && !$_SESSION['loggedin']): ?><a class="homeblack"
                                                                                        href="Login.php"><i
                            class="fa fa-user-o" aria-hidden="true"></i>
                    Log In

                    <?php elseif (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                    <a class="homeblack" href="logut.php"><i class="fa fa-user-o"
                                                             aria-hidden="true"></i> <?php echo 'Log Out'//echo $_SESSION['name'];?>
                        <?php else: ?> <a class="homeblack" href="Login.php"><i class="fa fa-user-o"
                                                                                aria-hidden="true"></i>
                            Log In
                            <?php endif; ?></a></li>

        </ul>
    </nav>
</header>

<p id="image_word">
    Immerse Yourself
</p>
<?php
$sql = "SELECT Embed FROM" . " country WHERE ID = " . $id;
$student_query_result = mysqli_query($connect, $sql) or die(mysql_error());
if (mysqli_num_rows($student_query_result) > 0){
while ($row = mysqli_fetch_array($student_query_result))
{
$embed = $row['Embed'];
?>
<div class="art">
    <article>
        <iframe width="950" height="400" src="<?php echo $embed ?>" frameborder="0"
                allowfullscreen></iframe>
        <?php
        }
        }


        $sql = "SELECT p.Name, p.Description, Image FROM" . " country as c inner join places as p on c.id = p.c_id WHERE c.ID = " . $id;
        //echo $sql;

        if ($strSQL = mysqli_query($connect, $sql)) {
            $i = 0;
            // echo ";fadfs";
            $image[] = array(null, null, null);
            $pname[] = array(null, null, null);
            $pdes[] = array(null, null, null);

            while ($Results = mysqli_fetch_assoc($strSQL)) {
                $image[$i] = $Results["Image"];
                $pname[$i] = $Results["Name"];
                $pdes[$i] = $Results["Description"];
                ?>

                <h2>
                    <?php echo $pname[$i] ?>
                </h2>
                <p>
                    <?php echo $pdes[$i]; ?>
                </p>
                <div class="pic"><img src=<?php echo $image[$i]; ?>></div>


                <?php
                $i++;
            }
        }
        ?>
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
