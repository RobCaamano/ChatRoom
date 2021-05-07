<?php

ini_set('display_errors', 1);

$conn = mysqli_connect ("sql1.njit.edu", "rc553", "LouroMuros2.", "rc553");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$username = $_GET['username'];
$password = $_GET['password'];
$textBox = $_GET['textBox'];

$sql = "SELECT * FROM ChatLogin WHERE names ='$username' AND userPassword='$password'";
$result = $conn->query($sql);

// If statement that checks if the matching username/password is in the table.
// If not in the table, echo statement. 

if ($result->num_rows > 0) {
    $sqlupdated = "UPDATE `ChatTextBox` SET textBox= '$textBox' WHERE names='$username'";
    $conn->query($sqlupdated);
} else {
    echo "Invalid Username + Password";
}
				
$conn->close();

		?>