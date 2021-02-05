
 <!DOCTYPE html>
 <html lang="en">
 <head>

 <!-- CSS only -->

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="index.css">

     <style>
         .row{
     
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

  }
  
  .row .table,thead,tr,th,td{
      text-align:center;
      width:1000px;
      height:50px;  
      border: 1px solid Black;
      border-collapse: collapse;
  }
     </style>
 </head>
 <body>
     <?php
     include ('link.php');
     ?>
     <?php
     if(isset($_SESSION['message'])):?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
     <?php
     echo $_SESSION['message'];
     unset($_SESSION['message']);?>

     </div>
     <?php endif?>
     
 <?php
$conn=mysqli_connect("localhost","root","","crud");


$result=$conn->query("SELECT * FROM books") or die($conn->error);
// echo "<pre>";
// print_r($result->fetch_assoc());
// print_r($result->fetch_assoc());
// echo "</pre>";
?>
 
 
 <?php
    include "header.php";
    include "footer.php";   
    ?>
<div class="row">
<table class="table">
<thead>
<tr>
<th name=>title</th>
<th>author</th>
<th>image</th>
<th>published</th>
<th colspan="2" >action</th>
</tr>
</thead>

<?php
while($row = $result->fetch_assoc()):?>
<tr>
<td><?php echo $row['title'];?></td>
<td><?php echo $row["author"]; ?></td>

<td><?php echo $row["image"]; ?></td>

<td><?php echo $row["published"]; ?></td>
<td>
   <button><a href="creat.php?edit=<?php echo $row["ID"];?>">edit</a" class="btn btn-info"></button> 
    <button><a href="read.php?delete=<?php echo $row["ID"];?>">delete</a"></button>
    
    
</td>
</tr>
<?php endwhile ?>
</table>
</div>

     
 </body>
 </html>
 
 




