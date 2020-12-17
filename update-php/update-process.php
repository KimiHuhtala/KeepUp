<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE data set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', date='" . $_POST['date'] . "', info='" . $_POST['info'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM data WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update  Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Data List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Date :<br>
<input type="text" name="date" class="txtField" value="<?php echo $row['date']; ?>">
<br>
Info:<br>
<input type="text" name="info" class="txtField" value="<?php echo $row['info']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>