<?php

  echo  $stu_name = $_POST['sname'];
  echo  $stu_address = $_POST['saddress'];
  echo  $stu_phone = $_POST['sphone'];
  echo  $stu_class = $_POST['class'];

   $conn = mysqli_connect('localhost','root', '', 'crud');
   $query = "INSERT into students(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
   $result = mysqli_query($conn, $query); 

   header("Location: http://localhost/01_php/03_php with sql/01_Crud/index.php?page=read");
   mysqli_close($conn)

?>