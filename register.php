<?php session_start(); ?>

<!doctype html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>register</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store" />
    <script src="js/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
</head>

<body>
    <header>
        <?php 
        require_once "nav.php";
        require_once "jumbotron2.php";
        ?>
    </header>
    
    <br><br>
    
    <div class="row">
        <form method="post" enctype="multipart/form-data">
            <div class="col-lg-4">
                name:<br>
                <label>
                    <input type="text" name="name" required><br>
                </label>
            </div>
            <div class="col-lg-4">
                skill:<br>
                <label>
                    <input type="text" name="skill" required><br>
                </label>
            </div>
            <div class="col-lg-4">
                photo:<br>
                <label>
                    <input type="file" name="photo" required><br>
                </label>
            </div>
            <div class="col-lg-4">
                email:<br>
                <label>
                    <input type="email" name="email" required><br>
                </label>
            </div>
            <div class="col-lg-4">
                password:<br>
                <label>
                    <input type="password" name="pw" required><br>
                </label>
            </div>
            <div class="col-lg-4">
            </div>
            <br>
            <input class="btn" type="submit" name="submit" value="submit" id="submit">
        </form>
    </div>

    <div id="profile">
        <h2>all profiles:</h2>
    </div>

    <footer>
        <?php
        require_once "footer.php";
        ?>
    </footer>
</body>

</html>
