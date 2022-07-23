<?php
$conn = mysqli_connect("mysql-giterhaber.alwaysdata.net", "276456_testuser", "B34ut1fu1223@", "giterhaber_dbtest");

// $conn = mysqli_connect("fdb32.awardspace.net", "3869866_nr", "B34ut1fu1223@", "3869866_nr");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
    echo 'connected';

?>