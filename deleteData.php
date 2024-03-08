<?php

$id =  $_POST['id'];

$conn = mysqli_connect('localhost', 'root', '', 'crud');
$query = "DELETE from students where sid = '{$id}'";
$result = mysqli_query($conn, $query) or die();

header('Location: http://localhost/01_php/03_php%20with%20sql/01_Crud/index.php?page=read');

mysqli_close($conn)

?>