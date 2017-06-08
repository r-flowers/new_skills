<?php session_start();
    if(isset($_POST['submit'])) {
        if(empty($_POST['email']) || empty($_POST['pw'])) {
            echo "username or password is invalid!";
        } else {
            $email = $_POST['email'];
            $pw = $_POST['pw'];
            $connection = mysqli_connect("localhost", "fssb", "Webdevfun1!", "fssb");
            $query = "select * from capture where pw='$pw' AND email='$email'";
            $loginCheck = mysqli_query($connection, $query);
            $rows = mysqli_num_rows($loginCheck);
            if ($rows == 1) {
                while($row = mysqli_fetch_assoc($loginCheck)) {
                    $_SESSION['uid'] = $row["uid"];
                    $_SESSION['time'] = $row["time"];
                    $_SESSION['name'] = $row["name"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['pw'] = $row["pw"];
                }
            } else {
                echo "try again";
            }
            mysqli_close($connection);
            header('location: lookup.php');
        }
    }
    ?>