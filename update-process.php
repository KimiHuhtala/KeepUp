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
  <meta charset="UTF-8">
  <title>Keep Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/update.css" rel="stylesheet" type="text/css">
  	<link href="css/main.css" rel="stylesheet" type="text/css">
<title>Update  Data</title>
</head>
<body>
  <header><img id="keepup" src="img/2.png" href="index.html"></header>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
<br>
New Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
New Date :<br>
<input type="text" name="date" class="txtField" value="<?php echo $row['date']; ?>">
<br>
New Info:<br>
<input type="text" name="info" class="txtField" value="<?php echo $row['info']; ?>">
<br>
<input type="submit" name="update" value="Update!" class="buttom" id="updateBtn">

</form>
</body>
</html>
