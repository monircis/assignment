 <?php
include_once 'connection.php';

echo $id=$_GET['id'];
$sql="DELETE FROM task WHERE id=$id";
$result=mysqli_query($connection,$sql);
header('Location: task_list.php');
