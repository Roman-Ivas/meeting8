<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    <div class="row">
<? if (!isset($_POST["title"])):?>
        <div class="col">
            <form method="post">
                <div class="mb-3">
                        <label for="productTitle" class="form-label">Product title:</label>
                        <input type="text" class="form-control" id="productTitle" name="title" placeholder="Title...">
                    </div>
                <button type="submit" class="btn btn-success">Add product</button>
            </form>
        </div>
        </div>
        <? else :?>
        <?
        $link= mysqli_connect("localhost","root","","shopdb",3306);
        $title = mysqli_real_escape_string($link, $_POST["title"]);
            if($title==null){
        $queryText = "INSERT INTO `products`(`Title`, `Quantity`) VALUES ('$title',3)";
        
        $ins= mysqli_query($link,$queryText);
        echo $ins;}
        
        ?>
        <? endif;?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>


