<?php session_start();
// store data from the form into variables
$n = $_POST['name'];
$s = $_POST['skill'];
$e = $_POST['email'];
$p = $_POST['pw'];

// retrieve the json file and convert it into a php array
$jr = file_get_contents('users.json');
$j = json_decode($jr, true);

//echo "<br> temp array <hr>";
//print_r ($j);
//echo "<br><br>";

// find the last object within the array to create the key for the object about to be inserted
if (count($j) == 0) {
    $objectCount = 1;
} else {
    $objectCount = count($j) + 1;
}

$k = "object".$objectCount;

// format the ID
$i = end($j)["id"];
$i = ++$i;

//echo "<br><br>ID: $i<hr>";
//echo "<br><br>KEY: $k<hr>";
//echo "<br><br>";

// insert my variables into an array stored in a variable called $add
$add = array(
    "id" => $i,
    "name" => $n,
    "skill" => $s,
    "email" => $e
);
// print_r ($add);

// append my new array into the json array
$j[$k] = $add;
//echo "<br><br>NEW ARRAY<hr>";
//print_r ($j);

// take my updated json array, format it back into json and overwrite it into the json file
$ju = json_encode($j);
file_put_contents('users.json', $ju);

// store the image on my service
$t = $_FILES['photo']['tmp_name'];
$f = "img/$i.jpg";
move_uploaded_file($t, $f);

$connection = mysqli_connect("localhost", "fssb", "Webdevfun1!", "fssb");
    $query = "INSERT INTO capture (name, email, pw) VALUES ('$n', '$e', '$p');";
    mysqli_query($connection, $query);
    
//    if(!$connection) {
//        echo "error! " . $query . "<br>" . $connection->error;
//    }
//    mysqli_close($connection); // closing connection
//    
    // end store to sql DB
    // finally, once all the data is processed, send the user to the confirmation page.
?>