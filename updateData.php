<?php

echo  $stu_id = $_POST['id'];
echo  $stu_name = $_POST['name'];
echo  $stu_address = $_POST['address'];
echo  $stu_phone = $_POST['phone'];
echo  $stu_class = $_POST['class'];

$conn = mysqli_connect('localhost', 'root','', 'crud');
$query = "UPDATE students SET sname = '{$stu_name}', saddress = '{$stu_address}', sphone = '{$stu_phone}', sclass = '{$stu_class}' Where sid = {$stu_id}";
$result = mysqli_query($conn, $query);

header('Location: http://localhost/01_php/03_php%20with%20sql/01_Crud/index.php?page=read');

mysqli_close($conn);

?>