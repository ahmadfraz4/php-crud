<!-- <?php
    // $conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection failed");
    // $my_query = "SELECT * FROM students INNER JOIN student_class WHERE students.sclass = student_class.cid";
    // $result = mysqli_query($conn, $my_query) or die('Query unsuccessfull');
    $conn = mysqli_connect('localhost','root','','crud');
    $my_query = "SELECT * FROM students INNER JOIN student_class WHERE students.sclass = student_class.cid";
    $result = mysqli_query($conn, $my_query);

?>
<section class="read col-12">
    <h1 class="text-center mb-4">Read All Records</h1>
    <table class="record col-12" border="1px">
    <tbody>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>class</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
        <?php 

        //  if(mysqli_num_rows($result) > 0){
        //     while($row = mysqli_fetch_assoc($result)){
            if(mysqli_num_rows($result) > 0){
                while($rows = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                
                <td class="d-flex">
                    <button class="btn btn-warning me-2">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    <?php }else{ echo "no record available";} 
        mysqli_close($conn)    
    ?>
</section> -->

<?php
   //  creating connection
   $conn = mysqli_connect('localhost', 'root', '', 'crud') or die('Cant Connect');
   // writing query to fetch data   
   $query = "SELECT * FROM students INNER JOIN student_class where students.sclass = student_class.cid";
   //  collecting data that comes in result of query   
   $result = mysqli_query($conn, $query);  


?>
<section class="read col-12">
    <h1 class="text-center mb-4">Read All Records</h1>
    <table class="record col-12" border="1px">
    <tbody>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>class</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
        <?php 
        // if number of rows of data exist
            if(mysqli_num_rows($result) > 0){
                // looping data 
                foreach($result as $row){
        ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                
                <td class="d-flex">
                    <a href="index.php?page=edit&id=<?php echo $row['sid'] ?>" class="btn btn-warning me-2">Edit</a>
                    <a href="index.php?page=delete&id=<?php echo $row['sid'] ?>" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php } ?>    
        </tbody>
    </table>
    <?php }else{ echo "no record available";} 
        mysqli_close($conn);
    ?>
</section>