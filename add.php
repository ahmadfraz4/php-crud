
<form method="post" action="saveData.php" class="card p-3 col-md-5 col-sm-8 col-12 mt-3">
    <h1 class="text-center">Add record</h1>
    <input type="text" name="sname" class="my-3" placeholder="name">
    <input type="text" name="saddress" class="my-3" placeholder="address">
   <?php 
    $conn = mysqli_connect('localhost', 'root', '' , 'crud') or dir('Connection failed');
    $query = "SELECT * FROM student_class" or die('Cant excecute query');
    $result = mysqli_query($conn, $query);
   ?>
    <select name="class" id="">
        <option value="" selected disabled>Choose Class</option>
        <?php if(mysqli_num_rows($result) > 0) { 
            foreach($result as $class){ 
        ?>
        <option value="<?php echo $class['cid'] ?>"><?php echo $class['cname'] ?></option>        
        <?php }} mysqli_close($conn); ?>
    </select>
    
    <input type="tel" name="sphone" class="my-3" placeholder="phone">
    <button type="submit" class="btn btn-dark">Save</button>
</form>