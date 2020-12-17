<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM data");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Update data</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Date</td>
<td>Info</td>
<td>Action</td>
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
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["info"]; ?></td>
<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>