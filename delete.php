<?php
include("../web/config.php");
$std_name=$_GET['std_name'];
$sql_delete="DELETE FROM yourname WHERE std_name='$std_name'";
$result_delete=mysqli_query($myconnect,$sql_delete);
if($result_delete)
{
    header("location:../web/std_details.php");
}
else
{
    echo 'data not deleted';
}
?>