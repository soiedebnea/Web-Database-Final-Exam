<?php
include("../web/config.php");
$sql="SELECT * FROM yourname";
$std_details=mysqli_query($myconnect,$sql);
echo '<table border="2px" width="100%"><tr><th> std_name </th><th> std_address</th><th> std_email </th><th>std_Password </th><th>mobile </th><tr>';
while($row=mysqli_fetch_array($std_details))
{
    $mobile=$row['mobile'];
    $std_name=$row['std_name'];
    $std_email=$row['std_email'];
    $std_password=$row['std_password'];
     $std_address=$row['std_address'];
    echo'<tr><td>'.$mobile.'</td><td>'.$std_name.'</td><td>'.$std_email.'</td><td>'.$std_password.'</td><td>'.$std_address.'</td></tr>';
}
?>
</table>