<?php 
include_once 'connection.php';
  $id=$_GET['id'];
 $sql = "SELECT * FROM `task` WHERE `id`=$id";
$result = mysqli_query($connection,$sql);
 $row = mysqli_fetch_array($result);
    
if($_POST){
    extract($_REQUEST);
  
   echo $sql = "UPDATE  `task` SET `name`='$name', `description`='$description', `validity`='$validity' WHERE `id`='$id' ";
    $result = mysqli_query($connection,$sql);
    if($result ==1){
       header('Location: task_list.php');
    } 
}  
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
<th>Edit Task</th>
<br />
</thead>

<tbody>

<tr>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
<td>Task Name</td>
<td><input  type="text" class="form-control" name="name"  value="<?php echo $row['name']; ?>" required=""/></td>
</tr>
<tr>

<td>Task Description</td>
<td><input  type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" required=""/></td>
</tr>
<tr>

<td>Task Validit by Days</td>
<td><input  type="number" class="form-control" name="validity"  value="<?php echo $row['validity']; ?>" placeholder="Input Number  like ,1,2" required=""/></td>
</tr>
<tr>

<td></td>
<td>
<input type="submit" value="Update Task" class="btn  btn-info" />
</td>
</tr>

</tbody>
</table>
</form>

</body>
</html>
