<section class="card p-3 col-md-5 col-sm-8 col-12 mt-3">
<form method="post" action="<?php  $_SERVER['PHP_SELF']?>" class="col-12 d-flex flex-column">
    <input type="text" placeholder="id" name="sid">
    <button name="show" type="submit" class="btn btn-dark my-2 col-4">Show</button>
</form>

<?php 
    if(isset($_POST['show'])){

        $conn = mysqli_connect('localhost', 'root', '', 'crud') or die('Connection failed') ;
        $query = "SELECT * FROM students where sid = '{$_POST['sid']}' ";
        $result = mysqli_query($conn, $query) or die('Query failed');

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                print_r($row);
      
?>

<form method="post" action="updateData.php" class="col-12 d-flex flex-column">
    <h1 class="text-center">Update record</h1>
    <input type="hidden" name="id" value="<?php echo $row['sid'] ?>">
    <input type="text" name="name" value="<?php echo $row['sname'] ?>" class="my-3" placeholder="name">
    <input type="text" name="address" value="<?php echo  $row['saddress'] ?>" class="my-3" placeholder="address">
    <?php 
        
        $query1 = "SELECT * FROM student_class";
        $result1 = mysqli_query($conn, $query1) or die('Query failed');
        
    ?>            
    <select name="class" id="">
        
        <?php if(mysqli_num_rows($result1) > 0) { 
            foreach($result1 as $class){ 
                
                if($row['sclass'] == $class['cid']){
                    $selected = 'selected';
                }else{
                    $selected = '';
                }
                
        ?>

        <option value="<?php echo $class['cid'] ?>"  <?php echo "{$selected}" ?> ><?php echo $class['cname'] ?></option>        
        <?php }}  ?>
    </select>
    
    <input type="tel" name="phone" value="<?php echo $row['sphone'] ?>" class="my-3" placeholder="phone">
    <button type="submit" class="btn btn-dark">Save</button>
</form>

<?php    }
        }
    }?>
</section>