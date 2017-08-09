<?php
include 'config.php';
global $connect, $error, $message;
session_start();
//var_dump($_SESSION);

if(isset($_POST['action'])) {
    if ($_POST['action'] == "signin") {

        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        echo $password;
        //echo md5($password);
        $sql = "SELECT Name, ID FROM" . " user WHERE Name = '" . $username . "' and Pass = '" .($password)  . "'";
        $strSQL = mysqli_query($connect, $sql);
        echo $sql;
        $Results = mysqli_fetch_array($strSQL);
        ?>

<?php
echo count($Results);
        if(count($Results)>=1) {

$message = $Results['Name']." Login Sucessfully!!";
echo $message;
            $_SESSION['id'] = $Results['ID'];
            $_SESSION['name'] = $Results['Name'];
            $_SESSION['loggedin'] = true;
        //    $_SESSION['update'] = false;
        }
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connect,$_POST['username']);
        $email      = mysqli_real_escape_string($connect,$_POST['email']);
        $password   = mysqli_real_escape_string($connect,$_POST['password']);
        $sql = "SELECT" . " email FROM ". "user where email ='".$email."'";
        $result = mysqli_query($connect,$sql);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "onlinedb";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo $password;
                echo md5($password);
                $sql = "insert into" . " user (email, Pass, Name) " . "values('" . $email . "', '" .md5($password) . "', '" . $name . "')";

// $sql = "insert into" ." user (emailID, password, userName, mName, lName, countrylives) "."values('"."labiba.kanij@gmail.com"."', '"."labiba"."', '" ."kanij"."',  NULL, NULL, NULL)";

// use exec() because no results are returned
                $conn->exec($sql);
//echo "New record created successfully";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;

        }
// mysql_query( "insert into user (  userName, emailID, password) values('" ."'$name', '".$email."', '".md5($password)."')");
//  mysql_query("insert into" ." user ( userName, emailID, password) values('" ."'$name', '".$email."', '".md5($password)."')");

        //echo $message;
    }


}



?>



