<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Stay = $_POST['stay'];
$Lof = $_POST['lof'];
$Room = $_POST['room'];
$Extra = $_POST['extra'];
$Airport = $_POST['airport'];
$Tour = $_POST['tour'];


$link = mysqli_connect("localhost", "lamin", "enter", "pramana");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO guest (Name, Email, Phone, Stay, Lof,Room, Extra, Airport, Tour) VALUES ('$Name','$Email','$Phone','$Stay','$Lof','$Room','$Extra','$Airport','$Tour')";
if(mysqli_query($link, $sql)){
  echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

header("Location: submit.html"); 
exit();
?>
