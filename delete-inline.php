<?php
  $stu_id = $GET['id'];

  include 'config.php';

  $sql = "DELETE FROM student WHERE sid = '{$stu_id}'";

  $result = mysqli_query($conn,$sql) or die("Querry Unsuccessful.");

  header('location: http://localhost/crud/index.php');

  mysqli_close($conn);
?>
