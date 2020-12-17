<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM data");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Keep Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/btn.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">
	<link href="css/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<header><img id="keepup" src="img/2.png" href="index.html"></header>
<div class="main-content">
  <!-- Uuden lisäys alue alkaa -->
  <div class="text-center">
	<button id="addNewBtn" type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewModal">Add a New Note</button>
  </div>
  <!-- Uuden turhaa -->
  <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">New Note</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
  <!-- Turha alue loppuu -->
		<div class="modal-body">
		  <form method="post" action="process.php">
			<!-- Uuden nimen alue -->
			<div class="form-group">
			  <label for="recipient-name" class="col-form-label">Name:</label>
			  <input type="text" class="form-control" name="event_name" id="newName" required>
			</div>
			<!-- Uuden päivän alue -->
			<div class="form-group">
			  <label for="message-date" class="col-form-label">Date:</label>
			  <input type="date" class="form-control" name="event-date" id="newDate" required>
			</div>
			<!-- Uuden infon alue -->
			<div class="form-group">
			  <label for="message-info" class="col-form-label">Information:</label>
			  <textarea class="form-control" id="newInformation" name="event-info" required></textarea>
			</div>
			<div class="modal-footer">
			  <!-- Uuden lisäys buttonit. ID:addNewButton  -->
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  <input type="submit" name="save" value="Submit" id="addNewBtn">
			</div>
		  </form>
		</div>
	  </div>
	</div>
  </div>
<!-- Uuden lisäys alue loppuu -->

<!-- Display alue alkaa -->
  <div class="Dashboard">
	<h1>Your Dashboard</h1><h2 id="user"></h2>
    <table id="dashboard-table">
    <tr>
    <td>Name</td>
    <td>Date</td>
    <td>Info</td>
    <td>Delete / Update</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    if($i%2==0)
    $classname="even";
    else
    $classname="odd";
    ?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["info"]; ?></td>
    <td><a id="delete" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete </a> &nbsp;&nbsp;<a  id="edit" href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
  </div>
  <!-- Display alue loppuu -->
</div>

<br>
<footer>&copy; Copyright 2020 Kimi Huhtala and Veeti Pere</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
