<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>  
    <?php 
        // connection 
        // mysqli(connection_name, username, password, database_name)

        // run sql query
        // mysqli_query(connection_name, sql query)

        // close connection

        // mysqli_close(connection name)

    ?>
     <?php include "navbar.php" ?>
    <div class="container pt-5 d-flex justify-content-center">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == "add") {
                include "add.php";
            } elseif ($page == "update") {
                include "update.php";
            } elseif ($page == "delete") {
                include 'delete.php';
            } elseif($page == 'read'){
                include 'read.php';
            } elseif($page == 'edit'){
                include 'edit.php';
            }
        } else {
            
            echo "Select an option from the navbar.";
        }
        ?>
    </div>

 

</body>

</html>