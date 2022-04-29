<?php
session_start();
//initialize varianles
$name="";
$email="";
$phone="";
$address="";
$id=0;
//connect to database
$db= mysqli_connect('localhost','root','Sara@2022','crud');
//if save button is clicked
if (isset($_POST['save'])) 
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    
  $query="INSERT INTO users (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
    mysqli_query($db,$query);
    $_SESSION['msg']="Data added successfully";
    //redirect to index page after insertion
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
}
//retrieve data from db
$results=mysqli_query($db,"SELECT * FROM users");
?>