<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-store" />
<!--	<script src="js/ajax.js"></script>-->
</head>
<body>
    <?php
    require_once "nav.php";
    ?>
    
    <h1>login</h1>
    
    <form method="post" action="loginprocess.php" style="padding: 10%;">
        <label>e-mail
            <input type="email" name="email" value="" required><br>
        </label>
        <br>
        <label>password
            <input type="password" name="pw" value="" required><br>
        </label>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>