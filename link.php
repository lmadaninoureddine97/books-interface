<?php
session_start();

$dbServerName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="crud";

$conn=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
   if($_POST){
       $title=isset ($_POST["title"]) ? $_POST["title"] : '';
       $author=$_POST["author"];
       $image=$_POST["image"];
       $published=$_POST["published"];
       $conn->query("INSERT INTO books(title,author,image,published) VALUES( '$title','$author','$image','$published')") or die($conn->error);
       echo $title.$author.$published;
    //    $_SESSION["message"]="record hase been saved";
    //    $_SESSION["msg_type"]="success";
    //    header("location:index.php");

      
   }
   if(isset($_GET["delete"])){
       $id=$_GET["delete"];
       $conn->query("DELETE FROM books WHERE id=$id") or die( $conn->error());
       $_SESSION["message"]="record hase been deleted";
       $_SESSION["msg_type"]="danger";
       header("location:index.php");
   }
?>