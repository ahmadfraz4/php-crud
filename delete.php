<?php 
$id = isset($_GET['id']) ? $_GET['id'] : '';

?>
<form action="deleteData.php" method="post" class="card p-3 col-md-5 col-sm-8 col-12 mt-3">
    <h1 class="text-center">Dalete record</h1>

    <input type="text" value="<?php  echo $id ? $id : ''; ?>" name="id" class="my-3" placeholder="id">
    <button type="submit" class="btn btn-dark">Delete</button>
</form>


<!-- code to get the url -->
<?php
// $protocol = 'http';
// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
//     $protocol = 'https';
// } elseif (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) {
//     $protocol = 'https';
// }

// $host = $_SERVER['HTTP_HOST']; // Retrieves the domain name or IP address
// $uri = $_SERVER['REQUEST_URI']; // Retrieves the URI

// $currentUrl = $protocol . '://' . $host . $uri;

// echo $currentUrl;
// ?>
