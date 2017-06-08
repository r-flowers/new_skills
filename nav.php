<nav class="navbar navbar-fixed-top ">
    <ul class="nav nav-justified">
        <li><a href="index.php">home</a></li>
        <li><a href="register.php">register</a></li>
        <li><a href="login.php">login</a></li>
        <?php
        if(isset($_SESSION['uid'])){
            echo '<li><a href="lookup.php">lookup</a></li>';
            echo '<li><a href="logout.php">logout</a></li>';
        }
        ?>
    </ul>
</nav>