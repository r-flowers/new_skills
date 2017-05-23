<?php
// store data from the form into variables
$n = $_POST['name'];
$s = $_POST['skill'];

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
    "skill" => $s
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
?>