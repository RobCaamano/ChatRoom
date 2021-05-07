<?php 

ini_set('display_errors', 1);

			$conn = mysqli_connect ("sql1.njit.edu", "rc553", "LouroMuros2.", "rc553");
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

// Initialize variables using _GET

$name2 = $_GET['name2'];


$query = "SELECT * FROM ChatTextBox WHERE names='$name2'";

$result = mysqli_query($conn, $query); 

// If statement that checks if inputted username exists in the table.
// While loop to print out messages.

if ($result->num_rows == 0) {
    echo "Username not found.";
} else {
    while ($row = $result->fetch_array()) {
        echo "$row[1]";
    }
}
$conn->close();
?>