<?php
include("config.php");

$tbl_info= "CREATE TABLE IF NOT EXISTS yourname (
    std_id INT (10) AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY(std_id),
    std_name VARCHAR (50) NOT NULL,
    std_email VARCHAR (50) NOT NULL,
    std_password VARCHAR (20) NOT NULL,
    std_address VARCHAR (50) NOT NULL,
    mobile INT (15)
)";
$result_yournametbl=mysqli_query($myconnect,$tbl_info);
    if ($result_yournametbl)
    {
        echo' Student table created <br>';
    }
else {
    echo' Student  table not created';
}
?>