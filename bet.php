<?php

require('alep.php');
//receives data request 


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];

echo $first_name;
echo $last_name;
echo $gender;
echo $address;
echo $email;

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO collegee VALUES ('$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>