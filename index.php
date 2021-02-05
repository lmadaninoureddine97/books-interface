<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php include 'link.php'?>
<?php
     if(isset($_SESSION['message'])):?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
     <?php
     echo $_SESSION['message'];
     unset($_SESSION['message']);?>

     </div>
     <?php endif?>
  
    <div class="container">
    <?php include "header.php";?>
    <div class="content"><p>welcome to library</p>

   
    </div>
    <?php
    include "footer.php";?>
   
    
   
    
</body>
</html>