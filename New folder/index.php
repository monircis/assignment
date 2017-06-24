<?php 
include_once 'connection.php';
  $message='';
if($_POST){
    extract($_REQUEST);
  
    $sql = "INSERT INTO `task`(`name`, `description`, `validity`) VALUES ('$name','$description','$validity')";
    $result = mysqli_query($connection,$sql);
    if($result ==1){
        $message=  "Task Added Successfully";
    }else{
         $message = "Something  wrong check  all  field";
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
<?php echo $message; ?>
<form action="#" method="POST">
<thead>
<th>Create New  Task</th>
<br />
</thead>

<tbody>

<tr>

<td>Task Name</td>
<td><input  type="text" class="form-control" name="name" required=""/></td>
</tr>
<tr>

<td>Task Description</td>
<td><input  type="text" class="form-control" name="description" required=""/></td>
</tr>
<tr>

<td>Task Validit by Days</td>
<td><input  type="number" class="form-control" name="validity" placeholder="Input Number  like ,1,2" required=""/></td>
</tr>
<tr>

<td></td>
<td>
<input type="submit" value="Add Task" class="btn  btn-info" />
</td>
</tr>

</tbody>
</table>
</form>

</body>
</html>
