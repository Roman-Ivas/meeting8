<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadContent('add.php'); return false;">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadContent('products.php'); return false;">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="loadContent('about.php'); return false;">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<? 
if(isset($_POST["title"])){
    echo "202";
    $link= mysqli_connect("localhost","root","","shopdb",3306);
  $title = mysqli_real_escape_string($link, $_POST["title"]);
  if($title==null){
$queryText = "INSERT INTO `products`(`Title`, `Quantity`) VALUES ('$title',3)";

$ins= mysqli_query($link,$queryText);
echo $ins;
}
echo "303";
}
else echo "404#2";
?>
<div class="container">
    <div id="content"></div>
</div>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
     $(document).ready(function() {
        loadContent('products.php');
    });
    function loadContent(page) {
        $("#content").load(page);
    }
</script>
</body>
</html>
