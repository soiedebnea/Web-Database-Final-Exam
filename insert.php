<?php
include("../web/config.php");
$std_name=$_POST['std_name'];
$std_email=$_POST['std_email'];
$std_password=$_POST['std_password'];
$std_address=$_POST['std_address'];
$mobile=$_POST['mobile'];
$encode=md5 ($std_password);
$sql= "INSERT INTO    yourname(std_name, std_address, std_email, std_password, mobile) VALUES('$siyam', '$sirajganj', '$soiedebnea@gmail.com', '$encode', '$0123456789')";
$insert_result=mysqli_query($myconnect,$sql);
    if ($insert_result)
    {
        //echo 'student info added';
        header("location:../web/std_details.php");
    }
else
{ 
    echo 'student info not added';
}
?>