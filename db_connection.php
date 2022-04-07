<?php
$uername ="root";
$password="";

$db = new mysqli('localhost',$username,$password,'student') or die("Unable to connect");
echo("Connected");
?>