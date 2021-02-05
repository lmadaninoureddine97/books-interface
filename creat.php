<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<?php
require_once("link.php");

?>
<?php
if(isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif ?>



    <?php
    include "header.php";
    include "footer.php";   
    ?>
    <div class="containe">
        <span id="new">new book:</span>
        <span id="add">add</span>
       
    </div>
    <div class="form">
        <form action="read.php" method="POST">
            <label for="">title</label><br>
            <input type="text" name="title"><br>
           
            <label for="">Author</label><br>
            <input type="text" name="author"><br>
            
            <label for="">image</label><br>
            <input type="file" name="image" class="custom-botton"><br>
            
            <label for="">Published At</label><br>
            <input type="text" name="published"> <br>
           <button value="add">Add</button>
        </form>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>