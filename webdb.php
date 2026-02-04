<?php
$user="root";
$password="";
$host="localhost";
$sql="CREATE DATABASE  webfinal";
$connect=mysqli_connect($host,$user,$password);

$result=mysqli_query($connect,$sql);
if($result==TRUE)
{
    echo "webfinal database created";
}
else
{
   echo "webfinal database not created"; 
}
?>