<form method="post" action="updateData.php" class="card p-3 col-md-5 col-sm-8 col-12 mt-3">
    <h1 class="text-center">Update record</h1>
    <?php 
    $conn = mysqli_connect('localhost', 'root', '' , 'crud') or dir('Connection failed');
    $stu_id = $_GET['id'];
    $query = "SELECT * FROM students where sid = {$stu_id}";
    $result = mysqli_query($conn, $query) or die('Cant excecute query');
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
   ?>
    <!-- <input type="text" name="id" class="my-3" placeholder="id">
    <button type="submit" class="btn btn-dark">Save</button> -->
    <input type="hidden" name="id" value="<?php echo $row['sid'] ?>">
    <input type="text" name="name" value="<?php echo $row['sname'] ?>" class="my-3" placeholder="name">
    <input type="text" name="address" value="<?php echo $row['saddress'] ?>" class="my-3" placeholder="address">
    
    
    
    <select name="class" id="">
    <?php 
    $query1 = 'SELECT * from student_class';
    $result1 = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result1) > 0){
        while($row1 = mysqli_fetch_assoc($result1)){
                
    ?>
        <?php  
            if($row['sclass'] == $row1['cid']){
              $selected = 'selected';
            }else{
                $selected = '';
            }
            echo  "<option value='{$row1['cid']}' $selected >{$row1['cname']}</option>";
            ?>
            
    <?php } }  ?>
    </select>
    <input type="tel" name="phone" value="<?php echo $row['sphone'] ?>" class="my-3" placeholder="email">
    <button type="submit" class="btn btn-dark">Save</button>
    <?php } } ?>       
</form>