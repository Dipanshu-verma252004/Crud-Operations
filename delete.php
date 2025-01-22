<?php

$conn=new mysqli('localhost','root','','revision_crud');
$id=$_GET['id'];
$sql="delete from crud where id='$id'";
$q=mysqli_query($conn,$sql);
if ($q) {
    // header('location:display.php');
    echo "<script>
    alert('data deleted successfully');
    window.location.href = 'display.php'; 
  </script>";
  exit();
}else{
    echo "<script>alert('There was an error')</script>";
    
}




?>