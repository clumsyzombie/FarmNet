<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "donsadle_farmdemo", "farm12345", "donsadle_farmnetdemo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$farmer = mysqli_real_escape_string($link, $_POST['farmer']);
$fieldnumber = mysqli_real_escape_string($link, $_POST['fieldnumber']);
$workonfield = mysqli_real_escape_string($link, $_POST['workonfield']);
$animalswork = mysqli_real_escape_string($link, $_POST['animalswork']);
$animalsworkdone = mysqli_real_escape_string($link, $_POST['animalsworkdone']);
$biogasworkdone = mysqli_real_escape_string($link, $_POST['biogasworkdone']);
$lumberworkdon = mysqli_real_escape_string($link, $_POST['lumberworkdon']);

// attempt insert query execution
$sql = "INSERT INTO farmlog (farmer, fieldnumber, workonfield, animalswork, animalsworkdone, biogasworkdone, lumberworkdon) VALUES ('$farmer', '$fieldnumber', '$workonfield', '$animalswork', '$animalsworkdone', '$biogasworkdone', '$lumberworkdon')";
if(mysqli_query($link, $sql)){
    echo "Record added successfully."; echo "<meta http-equiv=\"refresh\" content=\"0;URL=farmlog.html\">";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>