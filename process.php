<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	 $first_name = $_POST['event_name'];
	 $city_name = $_POST['event-date'];
	 $email = $_POST['event-info'];
	 $sql = "INSERT INTO data (name,date,info)
	 VALUES ('$first_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
