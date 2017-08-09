<?php
parse_str(file_get_contents("php://input"), $_POST);
include 'config.php';
global $connect, $error, $message;
session_start();


if (isset($_POST['action'])) {
    if ($_POST['action'] == "signin") {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $sql = "SELECT Name, ID FROM" . " user WHERE Name = '" . $username . "' and Pass = '" . $password . "'";
        $strSQL = mysqli_query($connect, $sql);
        $Results = mysqli_fetch_array($strSQL);
        ?>
        <?php
        echo count($Results);
        if (count($Results) >= 1) {
            $message = $Results['Name'] . " Login Sucessfull!";
            echo $message;
            $_SESSION['id'] = $Results['ID'];
            $_SESSION['name'] = $Results['Name'];
            $_SESSION['loggedin'] = true;
        }
    } elseif ($_POST['action'] == "signup") {
        $name = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $sql = "SELECT" . " email FROM " . "user where email ='" . $email . "'";
        $result = mysqli_query($connect, $sql);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message = "Invalid email address please type a valid email!!";
        } elseif ($numResults >= 1) {
            $message = $email . " Email already exist!!";
        } else {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "journey_guider";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $password = mysqli_real_escape_string($connect, $_POST['password']);
                $sql = "insert into" . " user (email, Pass, Name) " . "values('" . $email . "', '" . $password . "', '" . $name . "')";

                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
    }
}
?>



