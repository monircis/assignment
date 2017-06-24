<?php 
include_once 'connection.php';
   
?>
<html>
<head>
<link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
</head>
<body>
<a href="index.php" class="btn  btn-success">Create Task</a>
<a href="task_list.php" class="btn  btn-success">Task List</a>

<table class="table-bordered">

<form action="#" method="POST">
<thead>
<th>Task Name</th>
<th>Task Description</th>
<th>Task Validity</th>
<th>Action</th>
<br />
</thead>

<tbody>
<?php 
$sql = "SELECT * FROM `task`";
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($result)){
?>
<tr>
 
<td><?= $row['name']; ?></td>
<td><?= $row['description']; ?></td>
<td><?= $row['validity']; ?></td>
<td>
<a  href="edit.php?id=<?= $row['id']; ?>"   class="btn  btn-warning" >Edit</a>
<a  href="delete.php?id=<?= $row['id']; ?>"   class="btn  btn-danger" >Delete</a>
 
</td>
</tr>
 
 
 <?php } ?>

</tbody>
</table>
</form>

</body>
</html>
