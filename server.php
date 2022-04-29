<?php
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
    
  $query="INSERT INTO users (id,name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
    mysqli_query($db,$query);
    //redirect to index page after insertion
    header('Location: ' . $_SERVER['HTTP_REFERER']); 
}
?>