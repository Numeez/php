<?php

$conn = mysqli_connect("localhost","root","","php_demo");

if($conn){
    echo("Connected Successfully");
}
mysqli_select_db($conn,"php_demo"); 
$fname = $_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$sql = "insert into login values('".$fname."','".$lname."','".$email."')";

if(mysqli_query($conn,$sql)){
    echo"Query fired";
}
else{
    echo("error");
}
?>